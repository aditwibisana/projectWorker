<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data_resume = \App\Resume::all();
        return view('admin.dashboard', ['data_resume' => $data_resume]);
    }
    public function create(Request $request)
    {
        $data_resume = \App\Resume::create($request->all());
        if ($request->hasFile('foto_profil')) {
            $request->file('foto_profil')->move('images/', $request->file('foto_profil')->getClientOriginalName());
            $data_resume->foto_profil = $request->file('foto_profil')->getClientOriginalName();
            $data_resume->save();
        }
        if ($request->hasFile('foto_project')) {
            $request->file('foto_project')->move('images/', $request->file('foto_project')->getClientOriginalName());
            $data_resume->foto_project = $request->file('foto_project')->getClientOriginalName();
            $data_resume->save();
        }
        return redirect('/dashboard');
    }
    public function portofolio()
    {
        $daftar_project = \App\Project::all();
        return view('admin.portofolio', ['daftar_project' => $daftar_project]);
    }
    public function laporan()
    {
        $laporan = \App\Kontak::all();
        return view('admin.laporan', ['laporan' => $laporan]);
    }
}
