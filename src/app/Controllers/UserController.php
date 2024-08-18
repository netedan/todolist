<?php

namespace App\Controllers;

use App\Models\User;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
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
        $users = UserRepository::all();
        echo $this->blade->make('users', ['users' => $users])->render();
    }

    public function show(int $id)
    {
        $users = UserRepository::all();
        foreach ($users as $user) {
            if ($user['id'] === $id) {
                echo $this->blade->make('user', ['user' => $user])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

    public function destroy(int $id)
    {
        UserRepository::destroy($id);
        redirect('/users');
    }

    public function create()
    {
        echo $this->blade->make('user_add')->render();
    }

    public function store()
    {
        UserRepository::store(input()->post('user_name'), input()->post('user_surname'), input()->post('user_patronymic'));
        redirect('/users');
    }

    public function edit(int $id)
    {
        var_dump($id);
        $users = UserRepository::all();
        foreach ($users as $user) {
            var_dump($user['id']);
            if ($user['id'] === $id) {
                echo $this->blade->make('user_edit', ['user' => $user])->render();
                return;
            }
        }
    }

    public function update(int $id)
    {
        $users = UserRepository::all();
        foreach ($users as $user) {
            if ($user['id'] === $id) {
                UserRepository::update($id, input()->post('user_name'), input()->post('user_surname'), input()->post('user_patronymic'));
                redirect('/users');
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }
}

