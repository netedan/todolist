<?php

namespace App\Controllers;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use App\Repositories\TaskRepository;
use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;

class ProjectController
{
    public Blade $blade;

    public function __construct()
    {
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }

    public function index()
    {
        $projects = ProjectRepository::all();
        echo $this->blade->make('projects', ['projects' => $projects])->render();
    }

    public function show(int $id)
    {
        $projects = ProjectRepository::all();
        foreach ($projects as $project) {
            if ($project['id'] === $id) {
                echo $this->blade->make('project', ['project' => $project])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

    public function destroy(int $id)
    {
        ProjectRepository::destroy($id);
        redirect('/projects');
    }

    public function create()
    {
        echo $this->blade->make('project_add')->render();
    }

    public function store()
    {
        ProjectRepository::store(input()->post('project_name'), input()->post('author_id'));
        redirect('/projects');
    }

    public function edit(int $id)
    {
        var_dump($id);
        $projects = ProjectRepository::all();
        foreach ($projects as $project) {
            var_dump($project['id']);
            if ($project['id'] === $id) {
                echo $this->blade->make('project_edit', ['project' => $project])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

    public function update(int $id)
    {
        $projects = ProjectRepository::all();
        foreach ($projects as $project) {
            if ($project['id'] === $id) {
                ProjectRepository::update($id, input()->post('project_name'), input()->post('author_id'));
                redirect('/projects');
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }
}