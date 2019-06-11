<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\project;

class projectsController extends Controller
{
    public function index(){
        $project = \App\project::All();

        return view('projects.index', ['projects' => $project]);
    }

    public function store() {

        $project = new project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/project');
    }

    public function create() {

        return view('projects.create');
    }



    public function show() {

        return view('project.show');

    } 

    public function edit($id) {

        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));

    }

    public function update($id) {

        $project = Project::findOrFail($id);
        $project->title = request('title');
        $project->description = request('description');

        $project->save();
        return redirect('/projects');


    }

    public function destroy($id) {

        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
