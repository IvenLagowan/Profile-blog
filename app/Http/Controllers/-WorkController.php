<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Apply;

class WorkController extends Controller
{
    public function detail(Work $work)
    {
        return view('detail_work', [
            "title" => "Detail Work",
            "active" => 'work',
            "work" => $work
        ]);
    }

    public function send(Work $work)
    {
        return view('homepage.detail.workapply', [
            "title" => "Work Apply",
            "active" => 'work',
            "work" => $work
        ]);
    }

    public function apply(Request $request)
    {


        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'idcard' => 'required|max:255',
            'name' => 'required|max:255',
            'gander' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            // 'different' => 'required|max:255',
            'date' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',
            'education' => 'required|max:255',
            'school' => 'required|max:255',
            'major' => 'required|max:255',
            'gpa' => 'required|max:5',
            'graduation' => 'required|max:255',
            'course1' => 'required|max:255',
            'course2' => 'required|max:255',
            'course3' => 'required|max:255',
            'experience1' => 'required|max:255',
            'experience2' => 'required|max:255',
            'experience3' => 'required|max:255',
            'cv' => 'required|mimes:pdf|max:5024',
            'image' => 'image|file|max:5000'
        ]);


        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('apply-pdf');
        }
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('apply-image');
        }

        Apply::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil Silahkan Login');

        return redirect('/work')->with('success', 'Terimakasih, Data Anda Berhasil Dikirim');
    }

    public function cetak(Apply $apply)
    {
        return view('dashboard.apply.cetak', [
            'apply' => $apply,
        ]);

    }
}
