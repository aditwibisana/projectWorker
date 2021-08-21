<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $daftar_project = \App\Project::all();
        return view('project.project', ['daftar_project' => $daftar_project]);
    }
    public function create(Request $request)
    {
        $daftar_project = \App\Project::create($request->all());
        if ($request->hasFile('foto_project')) {
            $request->file('foto_project')->move('images/foto_project', $request->file('foto_project')->getClientOriginalName());
            $daftar_project->foto_profil = $request->file('foto_project')->getClientOriginalName();
            $daftar_project->save();
        }
        return redirect('/portofolio');
    }
}
