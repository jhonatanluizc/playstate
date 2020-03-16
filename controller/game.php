<?php
require_once("../model/game.php");



if (isset($_GET["op"])) {
    $op = $_GET["op"];
    if ($op == "register") {

        $title = trim($_POST["title"]);
        $console = trim($_POST["console"]);
        $description = trim($_POST["description"]);
        $value = $_POST["value"];
        $genre = $_POST["genre"];
        $discount = $_POST["discount"];
        $quantity = $_POST["quantity"];
        $wallpaper = $_FILES['wallpaper'];

        //tratando o wallpaper

        $wallpaper_type = explode('/', $wallpaper['type'])[1];
        $wallpaper_url = "../src/public/games/" . clear_string($title) . "." . $wallpaper_type;
        move_uploaded_file($wallpaper['tmp_name'], $wallpaper_url);
        $wallpaper_url = "src/public/games/" . clear_string($title) . "." . $wallpaper_type;

        $game_data = array(
            "title" => $title,
            "console" => $console,
            "description" => $description,
            "value" => $value,
            "genre" => $genre,
            "discount" => $discount,
            "quantity" => $quantity,
            "wallpaper" => $wallpaper_url,
        );
        $game = new Game();
        $game->create($game_data);
        header('Location: ../controller/adm.php?view=games');
    } else {
    }
} else {
    echo "Error 404";
}
