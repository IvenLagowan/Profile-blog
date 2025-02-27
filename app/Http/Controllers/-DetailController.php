<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Work;
use App\Models\Apply;
use App\Models\Startup;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DetailController extends Controller
{
    public function detail_prospect(Prospect $prospect)
    {
        return view('homepage.detail.detail_prospect', [
            'title' => 'Job Prospect',
            "active" => 'home',
            "prospect" => $prospect,
        ]);
    }

    public function news_detail(News $news)
    {
        return view('homepage.detail.news_single', [
            "title" => "Detail News",
            "active" => 'news',
            "news" => $news
        ]);
    }

    public function detail_startup(Startup $startup)
    {
        return view('homepage.detail.detail_startup', [
            "title" => "Startup",
            "active" => 'startup',
            "startup" => $startup
        ]);
    }

    public function detail_work(Work $work)
    {
        return view('homepage.detail.detail_work', [
            "title" => "Detail Work",
            "active" => 'work',
            "work" => $work
        ]);
    }

    public function form_karier(Work $work)
    {
        return view('homepage.detail.workapply', [
            "title" => "Work Apply",
            "active" => 'work',
            "work" => $work
        ]);
    }

    public function send_form(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',
            'education' => 'required|max:255',
            'school' => 'required|max:255',
            'major' => 'required|max:255',
            'cv' => 'required|mimes:pdf|max:5024',

            // 'gander' => 'required|max:255',
            // 'idcard' => 'required|max:255',
            // 'address' => 'required|max:255',
            // 'city' => 'required|max:255',
            // 'different' => 'required|max:255',
            // 'date' => 'required|max:255',
            // 'gpa' => 'required|max:5',
            // 'graduation' => 'required|max:255',
            // 'course1' => 'required|max:255',
            // 'course2' => 'required|max:255',
            // 'course3' => 'required|max:255',
            // 'experience1' => 'required|max:255',
            // 'experience2' => 'required|max:255',
            // 'experience3' => 'required|max:255',
            // 'image' => 'image|file|max:5000'
        ]);


        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('apply-pdf');
        }
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('apply-image');
        }

        Apply::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil Silahkan Login');

        // return redirect('/work')->with('success', 'Terimakasih, Data Anda Berhasil Dikirim');
        return back()->with('success', 'Terimakasih, Data Anda Berhasil Dikirim');

    }
}
