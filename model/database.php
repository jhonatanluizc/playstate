<?php

class Database
{
    function connection()
    {
        $database = 'playstate';
        $user = 'root';
        $password = '';
        $bd = "mysql:host=localhost;dbname=" . $database . ";charset=utf8";
        return new PDO($bd, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
       // return new PDO($bd, $user, $password);
    }
}
