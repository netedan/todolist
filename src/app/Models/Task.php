<?php

namespace Ntd\Todolist\Models;

class Task
{
    public int $id;
    public string $name;
    public bool $status;
    public int $authorId;
    public int $executorId;
}