<?php

namespace App\Controllers;

use App\Models\Tag;
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
        $tags = Tag::all();
        echo $this->blade->make('tags', ['tags' => $tags])->render();
    }

    public function show(int $id)
    {
        $tags = Tag::all();
        foreach ($tags as $tag) {
            if ($tag->id === $id) {
                echo $this->blade->make('tags', ['tags' => $tags])->render();
                return;
            }
        }
        echo $this->blade->make('404')->render();
    }

}