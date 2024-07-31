<?php
namespace Src;

use Models\User;

require '../autoload.php';

$user = new User();
$user->setFullName('a', 'b', 'c');
$user->printFullNameWithBr();