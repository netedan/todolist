<?php

namespace App\Models;

class Task implements BaseModel
{
    public function __construct(
        public ?int    $id,
        public ?string $name,
        public ?bool   $status,
        public ?int    $authorId,
        public ?int    $executorId
    ) {
    }
}