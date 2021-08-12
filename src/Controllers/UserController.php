<?php
namespace Lrandom\Cp17Avanced\Controllers;
use Lrandom\Cp17Avanced\Models\User;
class UserController
{
    public function index()
    {
        $user = new User();
        echo $user->getName();//Luan
    }
}

?>