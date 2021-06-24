<?php

namespace MVC\models;

use MVC\core\model;

class user extends model
{
    public function getAllUsers()
    {
        $data = model::db()->run("SELECT * FROM `users`")->fetchAll();
        return $data;
    }

    public function getUser($email, $password)
    {
        $data = model::db()->run("SELECT * FROM `users` WHERE `email` = ? && `password` = ?", [$email, $password])->fetch();
        return $data;
    }

    // public function insertUsers()
    // {
    //     $data = model::db()->run("INSERT INTO `users` (`name`,`email`,`password`) VALUES ('omar','omar','omar')");

    //     if ($data) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
