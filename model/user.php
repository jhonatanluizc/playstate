<?php
require_once("database.php");

class User
{
    function create($user)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO users (name, username, email, password, type)
            VALUES (:name, :username, :email, :password, :type)");

        $connection->prepare($sql)->execute($user);
    }

    function select(){
        
    }
}

/*
$user = new User();

// modelo para array do usuario
$user->create(
    array(
        "name" => "Jhonatan Luiz",
        "username" => "Jho",
        "email" => "jho@gmail.com",
        "password" => "123456",
        "type" => "user"
        )
);
*/
