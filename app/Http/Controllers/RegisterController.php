<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
   {
    return view('register.index', [
        'title' => 'Register',
        'active' => 'register'
    ]);
   }

   public function store(Request $request)
   {
    $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil Silahkan Login');

        return redirect('/login')->with('success','Registrasi Berhasil Silahkan Login');
    }
}
