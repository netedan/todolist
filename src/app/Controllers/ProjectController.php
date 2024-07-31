<?php

namespace App\Controllers;

use App\Models\Project;
use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;

class ProjectController
{
    public Blade $blade;
    public function __construct(){
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }
    public function index()
    {
        $projects = Project::all();
        echo $this->blade->make('projects', ['projects' => $projects])->render();
    }

    public function show(int $id)
    {
        $projects = Project::all();
        foreach ($projects as $project) {
            if ($project->id === $id) {
                echo $this->blade->make('project', ['project' => $project])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }
}