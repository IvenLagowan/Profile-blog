<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.apply.index', [
        "active" => "Apply",
        "apply1" => Apply::latest()->paginate(10)->withQueryString()
       ]);
    }

    // public function cetak(Apply $apply)
    // {

    //     return view('dashboard.apply.cetak', [
    //         'apply' => $apply,
    //         // "apply" => Apply::latest()
    //     ]);

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(Apply $apply)
    {
        return view('dashboard.apply.show', [
            'apply' => $apply,
            "active" => "Apply",
            // "apply" => Apply::all()
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(Apply $apply)
    {
        return view('dashboard.apply.cetak', [
            'apply' => $apply,
        ]);
        //     $apply = Apply::all();
        // return redirect('/dashboard/apply/cetak')->with('Formcetak');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apply $apply)
    {
        if($apply->image){
            Storage::delete($apply->image);
        }
        if($apply->cv){
            Storage::delete($apply->cv);
        }
        // buat deleted data
        Apply::destroy($apply->id);
        // alert sukses delete
        return redirect('/dashboard/apply')->with('success', 'New post has been deleted!');
    }
}
