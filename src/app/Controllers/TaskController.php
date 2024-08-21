<?php

namespace App\Controllers;

use App\Models\Task;
use App\Repositories\TagRepository;
use App\Repositories\TaskRepository;
use App\Repositories\UserRepository;
use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;

class TaskController
{
    public Blade $blade;

    public function __construct()
    {
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }

    public function index()
    {
        $tasks = TaskRepository::all();
        echo $this->blade->make('tasks', ['tasks' => $tasks])->render();
    }

    public function show(int $id)
    {
        $result = TaskRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('task', ['task' => $result])->render();
        }
    }

    public function destroy(int $id)
    {
        TaskRepository::destroy($id);
        redirect('/tasks');
    }

    public function create()
    {
        echo $this->blade->make('task_add')->render();
    }

    public function store()
    {
        TaskRepository::store(input()->post('task_name'), input()->post('task_status'), input()->post('author_id'), input()->post('executor_id'));
        redirect('/tasks');
    }

    public function edit(int $id)
    {
        $result = TaskRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('task_edit', ['task' => $result])->render();
        }
    }

    public function update(int $id)
    {
        TaskRepository::update($id, $_POST['task_name'], $_POST['task_status'], $_POST['author_id'], $_POST['executor_id']);
        redirect('/tasks');
    }
}