<?php

namespace App\classes;

class User
{
    public $users = [];
    public function __construct()
    {
        $this->users = [
            0=>[
                "id"        => "1",
                "name"      => "Mahadi",
                "user_name" => "admin",
                "password"  => "123456",
            ],
            1=>[
                "id"        => "2",
                "name"      => "Protik",
                "user_name" => "director",
                "password"  => "654321",
            ],
        ];
    }
    public function getAllUser()
    {
        return $this->users;
    }
}