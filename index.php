<?php
require_once __DIR__ . '/vendor/autoload.php';
use Lrandom\Cp17Avanced\Controllers\UserController;
use hisorange\BrowserDetect\Parser as Browser;
$userController = new UserController();
echo $userController->index();
if(Browser::isChrome()){
    echo 'This is chrome browser';
}else{
    echo 'This is not chrome browser';
};
?>