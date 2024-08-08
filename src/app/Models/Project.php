<?php

namespace App\Models;


class Project implements BaseModel
{
    public function __construct(
        public ?int    $id,
        public ?int    $authorId,
        public ?array  $tasks,
        public ?string $name,
    ) {
    }
}