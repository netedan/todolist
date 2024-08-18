<?php

namespace App\Repositories;

class UserRepository
{
    public static function all()
    {
        try {
            $conStr = sprintf(
                "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
                'postgres_todo',
                5432,
                'csip_tech',
                'csip_tech',
                'csip_tech'
            );
            $pdo = new \PDO($conStr);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sth = $pdo->prepare("SELECT id, name, surname, patronymic FROM users");
            $sth->execute();

            return $sth->fetchAll();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function destroy(int $id)
    {
        try {
            $conStr = sprintf(
                "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
                'postgres_todo',
                5432,
                'csip_tech',
                'csip_tech',
                'csip_tech'
            );
            $pdo = new \PDO($conStr);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sth = $pdo->prepare("DELETE FROM users where id = $id");
            $sth->execute();

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function store($name, $surname, $patronymic)
    {
        try {
            $conStr = sprintf(
                "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
                'postgres_todo',
                5432,
                'csip_tech',
                'csip_tech',
                'csip_tech'
            );
            $pdo = new \PDO($conStr);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sth = $pdo->prepare("INSERT INTO users (name, surname, patronymic) VALUES (:name, :surname, :patronymic)");
            $sth->execute(['name' => $name, 'surname' => $surname, 'patronymic' => $patronymic]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function update($id, $name, $surname, $patronymic)
    {
        try {
            $conStr = sprintf(
                "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
                'postgres_todo',
                5432,
                'csip_tech',
                'csip_tech',
                'csip_tech'
            );
            $pdo = new \PDO($conStr);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sth = $pdo->prepare("UPDATE users SET name=:name, surname=:surname, patronymic=:patronymic WHERE id = :id");
            $sth->execute(['name' => $name, 'surname' => $surname, 'patronymic' => $patronymic, 'id' => $id]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
