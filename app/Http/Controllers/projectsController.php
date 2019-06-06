<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index(){
        $project = \App\project::All();

        return view('projects.index', ['projects' => $project]);
    }
}
