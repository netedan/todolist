<?php

namespace App\Repositories;

class TaskRepository
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
            $sth = $pdo->prepare("SELECT id, name, status, author_id, executor_id FROM tasks");
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
            $sth = $pdo->prepare("DELETE FROM tasks where id = $id");
            $sth->execute();

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}