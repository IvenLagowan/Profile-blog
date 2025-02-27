<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Work;
use App\Models\Startup;
use App\Models\Category;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NavbarController extends Controller
{

    public function homepage()
    {
        return view('homepage.index', [
            "title" => "Home",
            "active" => "home",
            "news" => News::latest()->paginate(3)->withQueryString(),
            "prospect" => Prospect::all(),
            "startup" => Startup::all()
        ]);
    }

    public function startup()
    {
        return view('homepage.startup', [
            "title" => "Startup",
            "active" => "startup",
            "startup" => Startup::all()
        ]);
    }

    public function news()
    {
        return view('homepage.news', [
            "title" => "News",
            "active" => 'news',
            "news1" => News::latest()->paginate(6)->withQueryString()
        ]);
    }

    public function karier()
    {
        return view('homepage.work', [
            "title" => "Karier",
            "active" => "karier",
            "work" => Work::latest()->paginate(12),
            "startup" => Startup::all()
        ]);
    }

    public function contact()
    {
        return view('homepage.contact', [
            "title" => "Contact",
            "active" => "contact",
            // "work" => Work::latest()->paginate(12),
            // "startup" => Startup::all()
        ]);
    }

    public function categories()
    {
        return view('homepage.categories', [
            'title' => 'Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
