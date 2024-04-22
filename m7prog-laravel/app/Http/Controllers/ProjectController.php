<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
        $model = new Project();
        // definieer de velden
        // $model->field_one = 'mijn data';
        $model->title       = 'Mijn titel';
        $model->description = 'mijn verhaal';
        $model->active      = true;
        // sla het model op
        $model->save();
        
    }  
    public function index() {
        $projects = Project::where('active', 1)
               ->orderBy('title')
               ->take(10)
               ->get();
               return view(
                'projects.index',
                [
                    'projects' => $projects,
                ]
            );
    }
    public function show(Project $model)
{
    dump($model);
    return view('projects/show', ['model' => $model]);
}

    

}