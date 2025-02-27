<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all(),
            'category' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'categories' => Category::all()
        ]);
    }

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
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories'
        ]);
        Category::create($validatedData);
        // untuk menampilkan alert atau kata sukses
        return redirect('/dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // return view('dashboard.categories.show', [
        //     'categories' => $category
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // untuk edit data
        return view('dashboard.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // buat menyimpan update data
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories'
        ];

        // ini buat update slug
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        // ini buat validasi nama sama slug
        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)
            ->update($validatedData);
        // ini buat menampilkan alert sukses update data
        return redirect('/dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // buat deleted data
        Category::destroy($category->id);
        // alert sukses delete
        return redirect('/dashboard/categories')->with('success', 'New category has been deleted!');
    }

    //buat slug otomatis
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
