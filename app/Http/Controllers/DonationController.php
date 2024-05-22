<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function index()
    {
        $donations = Donation::latest()->get();

        return view('admin-panel.pages.donation.index', compact('donations'));
    }

    public function show($id)
    {
        $donation = Donation::find($id);

        return view('admin-panel.pages.donation.show', compact('donation'));
    }

    public function confirmDonation($id)
    {
        $donation = Donation::find($id);
        $donation->donation_nominal()->update([
            'status' => 'success'
        ]);

        return redirect()->route('admin-panel.donations.index')->with('success', 'Donasi dikonfirmasi');
    }
}
