<?php

namespace App\Repositories;

class UserRepository extends BaseRepository
{
    public static function all()
    {
        $sth = self::univ(
            "SELECT id, name, surname, patronymic FROM users", []
        );
        return $sth->fetchAll();
    }

    public static function destroy(int $id)
    {
        $sth = self::univ(
            "DELETE FROM users WHERE id = $id", []
        );
        return $sth->fetchAll();
    }

    public static function store($name, $surname, $patronymic)
    {
        $sth = self::univ(
            "INSERT INTO users ( name, surname, patronymic) VALUES (:name, :surname, :patronymic)",
            ['name' => $name, 'surname' => $surname, 'patronymic' => $patronymic]
        );
        return $sth->fetchAll();
    }

    public static function update($id, $name, $surname, $patronymic)
    {
        self::univ(
            "UPDATE users SET name=:name, surname=:surname, patronymic=:patronymic WHERE id = :id",
            ['name' => $name, 'surname' => $surname, 'patronymic' => $patronymic, 'id' => $id]
        );
    }

    public static function find($user_id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $sth = self::univ($sql, ['id' => $user_id]);
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}