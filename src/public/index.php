<?php
namespace Ntd\Todolist;

use Ntd\Todolist\Models\User;

require '../vendor/autoload.php';

$user = new User();
$user->setFullName('a', 'b', 'c');
$user->printFullNameWithBr();