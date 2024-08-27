<?php

namespace App\temp\Models\Users;

class Client extends User
{
    public function __construct(
        public string $name,
        public string $surname,
        public string $patronymic,
        private array $orders = [],
        public string $status = 'active',
    )
    {
        parent::__construct($name, $surname, $patronymic);
    }

    public function addOrder($order)
    {
        $this->orders[] = $order;
    }

    public function getOrders(): array
    {
        return $this->orders;
    }


}