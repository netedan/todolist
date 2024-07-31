<?php

namespace Models;

class User
{

    public int $id;
    private string $surname;//свойство
    public string $name;
    public string $patronymic;

    public function setFullName(string $surname, string $name, string $patronymic): void //метод
    {
        $this->surname = $surname;//запись параметра методов свойства
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

    public function getFullName(): string
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }

    public function printFullNameWithBr(): void
    {
        echo $this->getFullName();
        echo $this->br();
    }

    private function br(): string
    {
        return '<br>';
    }
}

