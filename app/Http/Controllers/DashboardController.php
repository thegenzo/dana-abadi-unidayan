<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $admin = User::where('level', 'admin')->count();
        $user = User::where('level','user')->count();
        $news = News::count();

        return view('admin-panel.pages.dashboard', compact('admin', 'user', 'news'));
    }
}
