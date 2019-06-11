<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\project;

class projectsController extends Controller
{
    public function index(){
        
        $project = project::All();

        return view('projects.index', ['projects' => $project]);
    }

    public function store() {

        project::create(request(['title' ,'description']));

        return redirect('/projects');
    }

    public function create() {

        return view('projects.create');
    }



    public function show(Project $project) {

        return view('projects.show', compact('project'));

    } 

    public function edit(Project $project) {


        return view('projects.edit', compact('project'));

    }

    public function update(Project $project) {

        $project->update(request(['title', 'description']));

        return redirect('/projects');


    }

    public function destroy(Project $project) {

       $project->delete();
        return redirect('/projects');
    }
}
