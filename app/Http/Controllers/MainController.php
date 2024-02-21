<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project :: all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $newProject = new Project();
        $newProject -> nome_autore = $data['nome_autore'];
        $newProject -> titolo_progetto = $data['titolo_progetto'];
        $newProject -> img_riferimento = 'https://via.placeholder.com/640x480.png/00ccff?text=project';
        $newProject -> descrizione = $data['descrizione'];
        $newProject -> data_pubblicazione = $data['data_pubblicazione'];

        $newProject -> save();

        return redirect() -> route('projects.index', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $projects = Project::find($id);
            return view('projects.show', compact('projects'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::find($id);
        return view('projects.update', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $data = $request -> all();

        $project -> nome_autore = $data['nome_autore'];
        $project -> titolo_progetto = $data['titolo_progetto'];
        $project -> img_riferimento = 'https://via.placeholder.com/640x480.png/00ccff?text=project';
        $project -> descrizione = $data['descrizione'];
        $project -> data_pubblicazione = $data['data_pubblicazione'];

        $project -> save();
        return redirect()-> route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
