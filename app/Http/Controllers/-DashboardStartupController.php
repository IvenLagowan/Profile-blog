<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Startup;
use App\Models\Prospect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardStartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Startup $startup)
    {
        return view('dashboard.startup.index', [
            'perusahaan' => Startup::where('user_id', auth()->user()->id)->get(),
            'user' => User::all(),
            'startup' => $startup,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('dashboard.startup.create', [
    //         'startup' => Startup::all(),
    //         'user' => User::all(),
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
            'slug' => 'required|unique:startups',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        // buat menyimpan file gambar
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('startup-images');
        }
        // buat autentikasi user_id sama buat excerpt (tulisan setengah)
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // buat menyimpan postingan
        Startup::create($validatedData);
        // untuk menampilkan alert atau kata sukses
        return redirect('/dashboard/startup')->with('success', 'New news has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        return view('dashboard.startup.show', [
            'startup' => $startup,
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Startup $startup)
    // {
    //     // untuk edit data
    //     return view('dashboard.startup.edit', [
    //         'startup' => $startup,
    //         'user' => User::all()
    //         // 'startup' => Startup::all()
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        // buat menyimpan update data
       $rules = [
        'title' => 'required|max:255',
        'image' => 'image|file|max:1024',
        'body' => 'required'
    ];

    // ini buat update slug
    if($request->slug != $startup->slug){
        $rules['slug'] = 'required|unique:startup';
    }

    // ini buat validasi update title, category_id, body
    $validatedData = $request->validate($rules);

     // ini buat update gambar
     if($request->file('image')){
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('startup-images');
    }
    // ini buat authentikasi user_id sama buat excerpt(tulisan setengah)
    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    // ini buat simpan data update
    Startup::where('id', $startup->id)
        ->update($validatedData);
    // ini buat menampilkan alert sukses update data
    return redirect('/dashboard/startup')->with('success', 'startup has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        if($startup->image){
            Storage::delete($startup->image);
        }
        // buat deleted data
        Startup::destroy($startup->id);
        // alert sukses delete
        return redirect('/dashboard/startup')->with('success', 'New post has been deleted!');
    }


    // /buat slug otomatis
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Prospect::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
