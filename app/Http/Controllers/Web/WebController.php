<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view("web.pages.home");
    }

    public function news()
    {
        return view("web.pages.news");
    }

    public function news_detail()
    {
        return view("web.pages.news-detail");
    }

    public function endowment()
    {
        return view("web.pages.endowment");
    }

    public function how_to_donate()
    {
        return view("web.pages.how-to-donate");
    }

    public function donate()
    {
        return view("web.pages.donate");
    }
}
