<?php

namespace App\Repositories;

class ProjectRepository extends BaseRepository
{
    public static function all()
    {
        $sth = self::univ(
            "SELECT id, project_name, author_id FROM projects", []
        );
        return $sth->fetchAll();
    }

    public static function destroy(int $id)
    {
        $sth = self::univ(
            "DELETE FROM projects where id = $id", []
        );
        return $sth->fetchAll();
    }

    public static function store($project_name, $author_id)
    {
        $sth = self::univ(
            "INSERT INTO projects (project_name, author_id) VALUES (:project_name, :author_id)",
            ['project_name' => $project_name, 'author_id' => $author_id]
        );
        return $sth->fetchAll();
    }

    public static function update($project_id, $project_name, $author_id)
    {
        self::univ(
            "UPDATE projects SET project_name=:project_name, author_id=:author_id WHERE id = :project_id",
            ['project_name' => $project_name, 'author_id' => $author_id, 'project_id' => $project_id]
        );
    }

    public static function find($project_id)
    {
        $sql = "SELECT * FROM projects WHERE id = :id";
        $sth = self::univ($sql, ['id' => $project_id]);
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}