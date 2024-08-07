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

    public static function all(): array
    {
        return [
            new Project(
                id: 1,
                authorId: 1,
                tasks: [],
                name: "Project 1",
            ),
            new Project(
                id: 2,
                authorId: 2,
                tasks: [],
                name: "Project 2",
            ),
            new Project(
                id: 3,
                authorId: 3,
                tasks: [],
                name: "Project 3",
            )
        ];
    }


}