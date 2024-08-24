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

    public function index() :void
    {
        $projects = ProjectRepository::all();
        echo $this->blade->make('projects', ['projects' => $projects])->render();
    }

    public function show(int $id) :void
    {
        $result = ProjectRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404')->render();
        } else {
            echo $this->blade->make('project', ['project' => $result])->render();
        }
    }

    public function destroy(int $id) :void
    {
        ProjectRepository::destroy($id);
        redirect('/projects');
    }

    public function create() :void
    {
        echo $this->blade->make('project_add')->render();
    }

    public function store() :void
    {
        ProjectRepository::store(input()->post('project_name'), input()->post('author_id'));
        redirect('/projects');
    }

    public function edit(int $id) :void
    {
        $result = ProjectRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404')->render();
        } else {
            echo $this->blade->make('project_edit', ['project' => $result])->render();
        }
    }

    public function update(int $id) :void
    {
        ProjectRepository::update($id, input()->post('project_name'), input()->post('author_id'));
        redirect('/projects');
    }
}