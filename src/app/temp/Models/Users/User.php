<?php

namespace App\temp\Models\Users;

abstract class User
{
    public function __construct(
        public string $name,
        public string $surname,
        public string $patronymic,
    )
    {
    }
}