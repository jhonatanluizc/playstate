<style>
    .card,
    .card img {
        border-radius: 0px;
    }

    .imgine {
        height: 160px;
        object-fit: cover;
        object-position: center;
    }
</style>

<div class="row">

    <?php
    require_once("../model/game.php");
    $game = new Game();
    $data = $game->select("");

    foreach ($data as $key => $game) {
        $card = "<div class=\"col-lg-3 col-sm-6 mb-4\" onclick=\"window.location.href ='../controller/game.php?op=game&cod=" . $game["id"] . "'\">";
        $card .= "<div class=\"card\">";
        $card .= "<img class=\"card-img-top imgine\" src=\"../" . $game["wallpaper"] . "\">";
        $card .= "<div class=\"card-body\">";
        $card .= "<h5><span>" . $game["title"] . "</span></h5>";
        $card .= "<div class=\"text-right\"><span>R$" . number_format($game["value"], 2, ',', '.') . "</span></div>";
        $card .= "</div></div></div>";
        echo $card;
    }

    ?>

</div>