<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::all();

        return view('admin-panel.pages.bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.pages.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'bank_name'      => 'required',
            'account_number' => 'required|numeric',
            'account_name'   => 'required',
        ];

        $messages = [
            'bank_name.required'        => 'Nama bank wajib diisi',
            'account_number.required'   => 'Nomor rekening wajib diisi',
            'account_number.numeric'    => 'Nomor rekening harus berupa angka',
            'account_name.required'     => 'Atas nama wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Bank::create($request->all());

        return redirect()->route('admin-panel.banks.index')->with('success', 'Bank berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $Bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bank = Bank::find($id);

        return view('admin-panel.pages.bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'bank_name'      => 'required',
            'account_number' => 'required|numeric',
            'account_name'   => 'required',
        ];

        $messages = [
            'bank_name.required'        => 'Nama bank wajib diisi',
            'account_number.required'   => 'Nomor rekening wajib diisi',
            'account_number.numeric'    => 'Nomor rekening harus berupa angka',
            'account_name.required'     => 'Atas nama wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Bank::find($id)->update($request->all());

        return redirect()->route('admin-panel.banks.index')->with('success', 'Bank berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);

        $bank->delete();

        return back()->with('success', 'Bank berhasil dihapus');
    }
}
