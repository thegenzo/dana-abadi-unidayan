<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function endowment()
    {
        $page = Page::where('name', 'Dana Abadi')->first();

        return view('admin-panel.pages.page.endowment', compact('page'));
    }

    public function how_to_donate()
    {
        $page = Page::where('name', 'Cara Donasi')->first();

        return view('admin-panel.pages.page.how-to-donate', compact('page'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        $rules = [
            'content' => 'required'
        ];

        $messages = [
            'content.required' => 'Konten wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $page->update($request->all());

        return redirect()->back()->with('success', 'Konten berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
