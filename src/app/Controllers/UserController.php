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

    public function index() :void
    {
        $users = UserRepository::all();
        echo $this->blade->make('users', ['users' => $users])->render();
    }

    public function show(int $id) :void
    {
        $result = UserRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('user', ['user' => $result])->render();
        }
    }

    public function destroy(int $id) :void
    {
        UserRepository::destroy($id);
        redirect('/users');
    }

    public function create() :void
    {
        echo $this->blade->make('user_add')->render();
    }

    public function store() :void
    {
        UserRepository::store(input()->post('user_name'), input()->post('user_surname'), input()->post('user_patronymic'));
        redirect('/users');
    }

    public function edit(int $id) :void
    {
        $result = UserRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('user_edit', ['user' => $result])->render();
        }
    }

    public function update(int $id) :void
    {
        UserRepository::update($id, $_POST['user_name'], $_POST['user_surname'], $_POST['user_patronymic']);
        redirect('/users');
    }
}