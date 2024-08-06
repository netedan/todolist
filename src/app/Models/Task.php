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
    )
    {
    }

    public static function all(): array
    {
        return [
            new Task(
                id: 1,
                name: 'Task 1',
                status: true,
                authorId: 1,
                executorId: 1
            ),
            new Task(
                id: 2,
                name: 'Task 2',
                status: false,
                authorId: 2,
                executorId: 2
            ),
            new Task(
                id: 3,
                name: 'Task 3',
                status: true,
                authorId: 3,
                executorId: 3
            )
        ];
    }
}