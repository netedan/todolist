<?php

namespace App\Controllers;

use App\Models\User;
use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;


class UserController
{
    public Blade $blade;

    public function __construct()
    {
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }

    public function index()
    {
        $users = User::all();
        echo $this->blade->make('users', ['users' => $users])->render();
    }
    public function show(int $id)
    {
        $users = User::all();
        foreach ($users as $user) {
            if ($user->id === $id) {
                echo $this->blade->make('user', ['user' => $user])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

}

