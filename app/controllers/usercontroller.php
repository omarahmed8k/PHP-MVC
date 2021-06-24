<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\Session;

class usercontroller extends controller
{
    public function __construct()
    {
        Session::Start();
        $user_data = Session::Get('user');

        if (empty($user_data)) {
            echo 'class not access';
            die;
        }
    }


    public function index()
    {
        echo 'User';
    }

    public function logout()
    {
        Session::Stop();
    }
}
