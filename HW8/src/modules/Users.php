<?php

namespace src\modules;

class Users
{
    public function findAll(): array
    {
        return [
            "0" => ["firstName" => "John",
                "secondName" => "Smith",
                "userName" => "JSmith",
                "email" => "jsmith@gmail.com"],
            "1" => ["firstName" => "John",
                "secondName" => "Doe",
                "userName" => "JDoe",
                "email" => "jdoe@gmail.com"],
            "2" => ["firstName" => "Sam",
                "secondName" => "Rain",
                "userName" => "Srain",
                "email" => "srain@gmail.com"],
            ];
    }
}