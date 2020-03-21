<?php
require_once("../model/game.php");

if (isset($_GET["op"])) {
    $op = $_GET["op"];

    if ($op == "register") {

        //id, title, console, description, value, genre, wallpaper
        $title = trim($_POST["title"]);
        $console = trim($_POST["console"]);
        $description = trim($_POST["description"]);
        $value = $_POST["value"];
        $genre = $_POST["genre"];
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
            "wallpaper" => $wallpaper_url,
        );

        $game = new Game();
        $game->create($game_data);
        header('Location: ../controller/adm.php?view=games');
    } else if ($op == "game") {
        require_once("../model/game.php");
        $game = new Game();
        $data = $game->select_where("where id = ' " . $_GET["cod"] . "'");
        $data = $data[0];

?>
        <script>
            function sub() {
                document.getElementById("game").submit();
            }
        </script>

        <style>
            form {
                display: none;
            }
        </style>

        <body onload="sub()">
            <form id="game" method="POST" action="../controller/site.php?view=game">
                <input type="text" name="id" value="<?php echo $data["id"]; ?>">
                <input type="text" name="wallpaper" value="<?php echo $data["wallpaper"]; ?>">
                <input type="text" name="title" value="<?php echo $data["title"]; ?>">
                <input type="text" name="console" value="<?php echo $data["console"]; ?>">
                <input type="text" name="genre" value="<?php echo $data["genre"]; ?>">
                <input type="text" name="value" value="<?php echo $data["value"]; ?>">
                <input type="text" name="description" value="<?php echo nl2br($data["description"]); ?>">
            </form>
        </body>

<?php

    }
} else {
    echo "Error 404";
}
