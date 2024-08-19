<?php

namespace App\Repositories;

abstract class BaseRepository
{
    public static function univ($prepare, $execute)
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
            $sth = $pdo->prepare($prepare);
            $sth->execute($execute);

            return $sth;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}