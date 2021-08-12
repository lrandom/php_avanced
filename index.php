<?php
require_once __DIR__ . '/vendor/autoload.php';
use Lrandom\Cp17Avanced\Controllers\UserController;
$userController = new UserController();
echo $userController->index();

?>