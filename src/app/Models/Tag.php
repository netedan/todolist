<?php

namespace App\Models;

class Tag implements BaseModel
{
    public function __construct(
        public ?int    $id,
        public ?string $name,
    ) {
    }
}