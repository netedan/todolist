<?php

namespace App\Repositories;

class TagRepository
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
            $sth = $pdo->prepare("SELECT id, name FROM tags");
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
            $sth = $pdo->prepare("DELETE FROM tags where id = $id");
            $sth->execute();

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function store($name)
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
            $sth = $pdo->prepare("INSERT INTO tags (name) VALUES (:name)");
            $sth->execute(['name' => $name]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function update($id, $name)
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
            $sth = $pdo->prepare("UPDATE tags SET name=:name WHERE id = :id");
            $sth->execute(['name' => $name, 'id' => $id]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}