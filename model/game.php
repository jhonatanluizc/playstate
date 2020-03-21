<?php
require_once("database.php");

class Game
{
    function create($game)
    {
        //id, title, console, description, value, genre, wallpaper

        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO games (title, console, description, value, genre, wallpaper)
            VALUES (:title, :console, :description, :value, :genre, :wallpaper)");

        $connection->prepare($sql)->execute($game);
    }

    function select($where)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from games $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "title" => $row['title'],
                "description" => $row['description'],
                "value" => $row['value'],
                "genre" => $row['genre'],
                "wallpaper" => $row['wallpaper'],
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }

    function select_where($where)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from games $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "title" => $row['title'],
                "console" => $row['console'],
                "description" => $row['description'],
                "value" => $row['value'],
                "genre" => $row['genre'],
                "wallpaper" => $row['wallpaper']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
}


function clear_string($string)
{
    if ($string !== mb_convert_encoding(mb_convert_encoding($string, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32'))
        $string = mb_convert_encoding($string, 'UTF-8', mb_detect_encoding($string));
    $string = htmlentities($string, ENT_NOQUOTES, 'UTF-8');
    $string = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $string);
    $string = html_entity_decode($string, ENT_NOQUOTES, 'UTF-8');
    $string = preg_replace(array('`[^a-z0-9]`i', '`[-]+`'), ' ', $string);
    $string = preg_replace('/( ){2,}/', '$1', $string);
    $string = strtolower(trim($string));
    return $string;
}
