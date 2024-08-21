<?php

namespace App\Repositories;

class TagRepository extends BaseRepository
{
    public static function all()
    {
        $sth = self::univ(
            "SELECT id, name FROM tags", []
        );
        return $sth->fetchAll();
    }

    public static function destroy(int $id)
    {
        $sth = self::univ(
            "DELETE FROM tags WHERE id = $id", []
        );
        return $sth->fetchAll();
    }

    public static function store($name)
    {
        $sth = self::univ(
            "INSERT INTO tags (name) VALUES (:name)",
            ['name' => $name]
        );
        return $sth->fetchAll();
    }

    public static function update($id, $name)
    {
        self::univ(
            "UPDATE tags SET name = :name WHERE id = :id",
            ['name' => $name, 'id' => $id]
        );
    }

    public static function find($tag_id)
    {
        $sql = "SELECT * FROM tags WHERE id = :id";
        $sth = self::univ($sql, ['id' => $tag_id]);
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}