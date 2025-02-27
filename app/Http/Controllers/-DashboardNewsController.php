<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;




class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $news)
    {
        return view('dashboard.news.index', [
            'news1' => News::where('user_id', auth()->user()->id)->paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'news' => $news,
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('dashboard.news.create', [
    //         'categories' => Category::all(),
    //         'user' => User::all()
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // buat ngeposting data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:news',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        // buat menyimpan file gambar
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        }
        // buat autentikasi user_id sama buat excerpt (tulisan setengah)
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // buat menyimpan postingan
        News::create($validatedData);
        // untuk menampilkan alert atau kata sukses
        return redirect('/dashboard/news')->with('success', 'New news has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    // public function show(News $news)
    // {
    //     return view('dashboard.news.show', [
    //         'news' => $news,
    //         'user' => User::all()
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        // untuk edit data
        return view('dashboard.news.edit', [
            'news' => $news,
            'categories' => Category::all(),
            'user' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        // buat menyimpan update data
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        // ini buat update slug
        if ($request->slug != $news->slug) {
            $rules['slug'] = 'required|unique:news';
        }

        // ini buat validasi update title, category_id, body
        $validatedData = $request->validate($rules);

        // ini buat update gambar
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }
        // ini buat authentikasi user_id sama buat excerpt(tulisan setengah)
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // ini buat simpan data update
        News::where('id', $news->id)
            ->update($validatedData);
        // ini buat menampilkan alert sukses update data
        return redirect('/dashboard/news')->with('success', 'news has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }
        // buat deleted data
        News::destroy($news->id);
        // alert sukses delete
        return redirect('/dashboard/news')->with('success', 'New post has been deleted!');
    }

    // /buat slug otomatis
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
