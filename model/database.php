<?php

class Database
{
    function connection()
    {
        $database = 'playstate';
        $user = 'root';
        $password = '';
        $bd = "mysql:host=localhost;dbname=" . $database;
        return new PDO($bd, $user, $password);
    }
}
