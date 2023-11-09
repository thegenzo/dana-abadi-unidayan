<?php

namespace App\Http\Controllers;

use App\Models\Allotment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllotmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allotments = Allotment::all();

        return view('admin-panel.pages.allotment.index', compact('allotments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.pages.allotment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'allotment_name' => 'required'
        ];

        $messages = [
            'allotment_name.required' => 'Nama penempatan wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Allotment::create($request->all());

        return redirect()->route('admin-panel.allotments.index')->with('success', 'Penempatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Allotment $allotment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $allotment = Allotment::find($id);

        return view('admin-panel.pages.allotment.edit', compact('allotment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'allotment_name' => 'required'
        ];

        $messages = [
            'allotment_name.required' => 'Nama penempatan wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Allotment::find($id)->update($request->all());

        return redirect()->route('admin-panel.allotments.index')->with('success', 'Penempatan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $allotment = Allotment::find($id);

        if($allotment->donation()->count() > 0) {
            return redirect()->back()->with('failed', 'Data ini memiliki data relasi dengan data donasi');
        }

        $allotment->delete();

        return back()->with('success', 'Penempatan berhasil dihapus');
    }
}
