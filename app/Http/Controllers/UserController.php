<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin-panel.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name'      => 'required',
            'level'     => 'required',
            'avatar'    => 'image|mimes:jpeg,png,jpg',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed',
        ];

        $messages = [
            'name.required'         => 'Nama user wajib diisi',
            'level.required'        => 'Level user wajib diisi',
            'avatar.image'          => 'Avatar harus berupa gambar',
            'avatar.mimes'          => 'Avatar harus berformat gambar (jpeg, png atau jpg)',
            'email.required'        => 'Email user wajib diisi',
            'email.email'           => 'Email user harus berformat email',
            'email.unique'          => 'Email user sudah terpakai',
            'password.required'     => 'Password wajib diisi',
            'password.min'          => 'Password harus berupa 8 karakter',
            'password.confirmed'    => 'Password harus sama dengan konfirmasi password',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = $request->all();

        if($request->has('avatar')) {
            $image = $request->file('avatar');
            $filename = time(). '.jpg';
            $upload_filepath = 'public/users';
            $path = $image->storeAs($upload_filepath, $filename);
            unset($data['avatar']);
            $data['avatar'] = Storage::url($path);
        } else {
            $data['avatar'] = $request->level == 'admin' ? 'https://static-00.iconduck.com/assets.00/user-icon-2048x2048-ihoxz4vq.png' : 'https://cdn-icons-png.flaticon.com/512/945/945120.png';
        }

        $user = User::create($data);

        return redirect()->route('admin-panel.user.index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin-panel.pages.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin-panel.pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name'      => 'required',
            'level'     => 'required',
            'avatar'    => 'image|mimes:jpeg,png,jpg',
            'email'     => 'required|email|unique:users,email,'.$user->id.'id',
            'password'  => 'required|min:8|confirmed',
        ];

        $messages = [
            'name.required'             => 'Nama user wajib diisi',
            'level.required'            => 'Level user wajib diisi',
            'avatar.image'              => 'Avatar harus berupa gambar',
            'avatar.mimes'              => 'Avatar harus berformat gambar (jpeg, png atau jpg)',
            'email.required'            => 'Email user wajib diisi',
            'email.email'               => 'Email user harus berformat email',
            'email.unique'              => 'Email user sudah terpakai',
            'password.required'         => 'Password wajib diisi',
            'password.min'              => 'Password harus berupa 8 karakter',
            'password.confirmed'        => 'Password harus sama dengan konfirmasi password',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = $request->all();

        if($request->has('avatar')) {
            // remove the old avatar
            $deletePath = public_path($user->avatar);
            File::delete($deletePath);

            // upload new avatar
            $image = $request->file('avatar');
            $filename = time(). '.jpg';
            $upload_filepath = 'public/users';
            $path = $image->storeAs($upload_filepath, $filename);
            unset($data['avatar']);
            $data['avatar'] = Storage::url($path);
        }

        $user->update($data);

        return redirect()->route('admin-panel.user.index')->with('success', 'User berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Construct the full storage path
        $filePath = public_path($user->avatar);

        // Check if the file exists
        if (file_exists($filePath)) {
            // Delete the file
            File::delete($filePath);
        } 
        
        $user->delete();

        return back()->with('success', 'User berhasil dihapus');
    }
}
