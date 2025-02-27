<?php

namespace App\Http\Controllers\Home;

use App\Models\News;
use App\Models\Work;
use App\Models\Startup;
use App\Models\Category;
use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{

    public function homepage()
    {
        return view('homepage.index.index', [
            "title" => "Home",
            "active" => "home",
            "news" => News::latest()->paginate(3)->withQueryString(),
            "prospect" => Prospect::all(),
            "startup" => Startup::all()
        ]);
    }

    public function startup()
    {
        return view('homepage.index.startup', [
            "title" => "Startup",
            "active" => "startup",
            "startup" => Startup::all()
        ]);
    }

    public function news()
    {
        return view('homepage.index.news', [
            "title" => "News",
            "active" => 'news',
            "news1" => News::latest()->paginate(6)->withQueryString()
        ]);
    }

    public function karier()
    {
        return view('homepage.index.work', [
            "title" => "Karier",
            "active" => "karier",
            "work" => Work::latest()->paginate(12),
            "startup" => Startup::all()
        ]);
    }

    public function contact()
    {
        return view('homepage.index.contact', [
            "title" => "Contact",
            "active" => "contact",
            // "work" => Work::latest()->paginate(12),
            // "startup" => Startup::all()
        ]);
    }

    public function categories()
    {
        return view('homepage.index.categories', [
            'title' => 'Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
