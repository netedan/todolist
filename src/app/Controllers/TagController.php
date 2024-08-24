<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Repositories\ProjectRepository;
use App\Repositories\TagRepository;
use App\Repositories\TaskRepository;
use App\Repositories\UserRepository;
use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;

class TagController
{
    public Blade $blade;

    public function __construct()
    {
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }

    public function index() :void
    {
        $tags = TagRepository::all();
        echo $this->blade->make('tags', ['tags' => $tags])->render();
    }

    public function show(int $id) :void
    {
        $result = TagRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('tag', ['tag' => $result])->render();
        }
    }

    public function destroy(int $id) :void
    {
        TagRepository::destroy($id);
        redirect('/tags');
    }

    public function create() :void
    {
        echo $this->blade->make('tag_add')->render();
    }

    public function store() :void
    {
        TagRepository::store(input('tag_name'));
        redirect('/tags');
    }

    public function edit(int $id) :void
    {
        $result = TagRepository::find($id);
        if ($result === false) {
            echo $this->blade->make('404');
        } else {
            echo $this->blade->make('tag_edit', ['tag' => $result])->render();
        }
    }

    public function update(int $id) :void
    {
        TagRepository::update($id, input()->post('tag_name'));
        redirect('/tags');
    }
}