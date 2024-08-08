<?php

namespace App\Controllers;

use App\Models\Task;
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
        $tasks = TaskRepository::all();
        foreach ($tasks as $task) {
            if ($task['id'] === $id) {
                echo $this->blade->make('task', ['task' => $task])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

    public function destroy(int $id)
    {
        TaskRepository::destroy($id);
        redirect('/tasks');
    }

}