<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function halamanlogin()
    {
        return view('login.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/halamanlogin');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/halamanlogin');
    }
    public function resume()
    {
        $data_resume = \App\Resume::all();
        return view('resume.resume', ['data_resume' => $data_resume]);
    }
    public function kontak()
    {
        return view('resume.kontak');
    }
    public function create_krisar(Request $request)
    {
        $kontak = \App\Kontak::create($request->all());
        return redirect('/kontak');
    }
}
