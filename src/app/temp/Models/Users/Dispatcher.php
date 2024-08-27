<?php

namespace App\temp\Models\Users;

use App\temp\Models\Fleet;

class Dispatcher extends User
{
    public function __construct(
        public string $name,
        public string $surname,
        public string $patronymic,
        public Fleet  $fleet
    )
    {
        parent::__construct($name, $surname, $patronymic);
    }
}