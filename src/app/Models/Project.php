<?php

namespace Ntd\Todolist\Models;


class Project
{
    public int $id;
    public int $authorId;
    public array $tasks;
    public string $name;
}
