<?php

namespace App\Models;

class Tag implements BaseModel
{
    public function __construct(
        public ?int    $id,
        public ?string $name,
    )
    {
    }

    public static function all(): array
    {
        return [
            new Tag(
                id: 1,
                name: 'tag1',
            ),
            new Tag(
                id: 2,
                name: 'tag2',
            )
        ];
    }
}