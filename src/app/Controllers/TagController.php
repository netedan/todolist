<?php

namespace App\Controllers;

use App\Models\Tag;
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

    public function index()
    {
        $tags = TagRepository::all();
        echo $this->blade->make('tags', ['tags' => $tags])->render();
    }

    public function show(int $id)
    {
        $tags = TagRepository::all();
        foreach ($tags as $tag) {
            if ($tag['id'] === $id) {
                echo $this->blade->make('tag', ['tag' => $tag])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

    public function destroy(int $id)
    {
        TagRepository::destroy($id);
        redirect('/tags');
    }

    public function create()
    {
        echo $this->blade->make('tag_add')->render();
    }

    public function store()
    {
        TagRepository::store(input('tag_name'));
        redirect('/tags');
    }

    public function edit(int $id)
    {
        var_dump($id);
        $tags = TagRepository::all();
        foreach ($tags as $tag) {
            if ($tag['id'] === $id) {
                echo $this->blade->make('tag_edit', ['tag' => $tag])->render();
                return;
            }
        }
    }

    public function update(int $id)
    {
        $tags = TagRepository::all();
        foreach ($tags as $tag) {
            if ($tag['id'] === $id) {
                TagRepository::update($id, input()->post('tag_name'));
                redirect('/tags');
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }
}