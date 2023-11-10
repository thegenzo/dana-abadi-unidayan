<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view("web.pages.home");
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
}