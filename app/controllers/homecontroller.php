<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\Session;

class homecontroller extends controller
{
    public function __construct()
    {
        @session_start();
    }

    public function index()
    {
        $users = new user();
        $data = $users->getAllUsers();
        $title = 'Home';
        $this->view('home\index', ['title' => $title, 'data' => $data]);
    }

    public function login()
    {
        $title = 'Login';
        $this->view('home\login', ['title' => $title]);
    }

    public function postLogin()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors();
            print_r($errors->firstOfAll());
            exit;
        } else {
            echo "Success!";
            $user = new user();
            $data = $user->getUser($_POST['email'], $_POST['password']);
            Session::Set('user', $data);
            helpers::redirect('user/index');
        }
        echo '<pre>';
        print_r($_POST);
    }
}
