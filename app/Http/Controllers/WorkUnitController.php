<?php

namespace App\Http\Controllers;

use App\Models\WorkUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workUnits = WorkUnit::all();

        return view('admin-panel.pages.work-unit.index', compact('workUnits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.pages.work-unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'unit_name' => 'required'
        ];

        $messages = [
            'unit_name.required' => 'Nama unit kerja wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        WorkUnit::create($request->all());

        return redirect()->route('admin-panel.work-units.index')->with('success', 'Unit Kerja berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkUnit $workUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $workUnit = WorkUnit::find($id);

        return view('admin-panel.pages.work-unit.edit', compact('workUnit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'unit_name' => 'required'
        ];

        $messages = [
            'unit_name.required' => 'Nama unit kerja wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        WorkUnit::find($id)->update($request->all());

        return redirect()->route('admin-panel.work-units.index')->with('success', 'Unit kerja berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $workUnit = WorkUnit::find($id);

        if($workUnit->donation()->count() > 0) {
            return redirect()->back()->with('failed', 'Data ini memiliki data relasi dengan data donasi');
        }

        $workUnit->delete();

        return back()->with('success', 'Unit kerja berhasil dihapus');
    }
}
