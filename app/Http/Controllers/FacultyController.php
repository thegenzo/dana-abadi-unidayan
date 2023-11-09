<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();

        return view('admin-panel.pages.faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.pages.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'faculty_name' => 'required'
        ];

        $messages = [
            'faculty_name.required' => 'Nama fakultas wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Faculty::create($request->all());

        return redirect()->route('admin-panel.faculties.index')->with('success', 'Fakultas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faculty = Faculty::find($id);

        return view('admin-panel.pages.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'faculty_name' => 'required'
        ];

        $messages = [
            'faculty_name.required' => 'Nama fakultas wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Faculty::find($id)->update($request->all());

        return redirect()->route('admin-panel.faculties.index')->with('success', 'Fakultas berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faculty = Faculty::find($id);

        if($faculty->donation()->count() > 0) {
            return redirect()->back()->with('failed', 'Data ini memiliki data relasi dengan data donasi');
        }

        $faculty->delete();

        return back()->with('success', 'Fakultas berhasil dihapus');
    }
}
