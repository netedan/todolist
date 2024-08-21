<?php

namespace App\Repositories;

class TaskRepository extends BaseRepository
{
    public static function all()
    {
        {
            $sth = self::univ(
                "SELECT id, name, status, author_id, executor_id FROM tasks", []
            );
            return $sth->fetchAll();
        }
    }

    public static function destroy(int $id)
    {
        $sth = self::univ(
            "DELETE FROM tasks WHERE id = $id", []
        );
        return $sth->fetchAll();
    }

    public static function store($name, $status, $author_id, $executor_id)
    {
        $sth = self::univ(
            "INSERT INTO tasks (name, status, author_id, executor_id) VALUES (:name, :status, :author_id, :executor_id)",
            ['name' => $name, 'status' => $status, 'author_id' => $author_id, 'executor_id' => $executor_id]
        );
        return $sth->fetchAll();
    }

    public static function update($id, $name, $status, $author_id, $executor_id)
    {
        self::univ(
            "UPDATE tasks SET name=:name, status=:status, author_id=:author_id, executor_id=:executor_id WHERE id = :id",
            ['name' => $name, 'status' => $status, 'author_id' => $author_id, 'executor_id' => $executor_id, 'id' => $id]
        );
    }

    public static function find($task_id)
    {
        $sql = "SELECT * FROM tasks WHERE id = :id";
        $sth = self::univ($sql, ['id' => $task_id]);
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}