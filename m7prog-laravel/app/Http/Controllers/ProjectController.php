<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
        return view(view:'projects.projects');
        
    }  
    
public function index() {
    $projects = Project::all();
    return view(
        'projects.index',
        [
            'projects' => $projects,
        ]
    );
}

}