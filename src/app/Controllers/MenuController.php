<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;
use const App\ROOT_PATH;

class MenuController
{
    public Blade $blade;

    public function __construct()
    {
        $this->blade = new Blade(ROOT_PATH . '/views', ROOT_PATH . '/cache');
    }

    public function show()
    {
        echo $this->blade->make('menu')->render();
    }
}