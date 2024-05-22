<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\DonationNominal;
use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function index()
    {
        // Donation total
        $donationTotal = DonationNominal::where('status', 'success')->sum('amount');

        return view("web.pages.home", compact('donationTotal'));
    }

    public function news()
    {
        $latestNews = News::where('status', 'published')->latest()->paginate(6);

        return view("web.pages.news", compact("latestNews"));
    }

    public function news_detail($id)
    {
        $news = News::findOrFail($id);

        return view("web.pages.news-detail", compact("news"));
    }

    public function endowment()
    {
        $page = Page::where('name', 'Dana Abadi')->first();
        
        return view("web.pages.endowment", compact("page"));
    }

    public function how_to_donate()
    {
        $page = Page::where('name', 'Cara Donasi')->first();
        
        return view("web.pages.how-to-donate", compact("page"));
    }

    public function donate()
    {
        return view("web.pages.donate");
    }

    public function donation(Request $request)
    {
        $rules = [
            'amount'        => 'required|numeric|min:10000',
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required',
            'city'          => 'required',
            'status'        => 'required',
        ];

        $messages = [
            'amount.required'       => 'Nominal wajib diisi',
            'amount.numeric'        => 'Nominal harus berupa angka',
            'amount.min'            => 'Nominal minimal Rp. 10.000',
            'name.required'         => 'Nama wajib diisi',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email harus berformat email',
            'phone.required'        => 'Nomor handphone wajib diisi',
            'city.required'         => 'Kota/Kabupaten wajib diisi',
            'status.required'       => 'Status wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('failed', 'Mohon lengkapi data diri anda');
        }

        $data = $request->except('amount');

        DB::beginTransaction();
        try {
            // Insert donator profile data
            $donation = Donation::create($data);

            // Insert donation nominals
            $donation->donation_nominal()->create([
                'amount' => $request->amount,
                'method' => 'online_payment',
                'status' => 'pending'
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('failed', 'Ada yang salah, silahkan coba lagi');
        }


        return redirect()->route('web.donation-success', Crypt::encrypt($donation->id));
    }

    public function donationSuccess($id)
    {
        $params = Crypt::decrypt($id);
        $donation = Donation::find($params);

        return view('web.pages.donation-success', compact('donation'));
    }

    public function uploadDonationReceipt(Request $request, $id)
    {
        $donation = Donation::find($id);
        $data = $request->all();
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = time(). '.jpg';
            $upload_filepath = 'public/donations';
            $path = $image->storeAs($upload_filepath, $filename);
            unset($data['image']);
            $data['image'] = Storage::url($path);
        }

        $donation->donation_nominal()->update([
            'image' => $data['image']
        ]);

        return redirect()->route('web.home')->with('success', 'Terima kasih atas donasi anda');
    }
}
