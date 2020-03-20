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

    .the_game {
        height: 70px;
    }
</style>

<div class="container">
    <h1 class="my-4 text-center">
        <small>Confira Nossos Games</small>
    </h1>

    <div class="row">

        <?php
        require_once("../model/game.php");
        $game = new Game();

        $search = "";

        if (isset($_POST["search"])) {
            $search = trim($_POST["search"]);
        }

        $data = $game->select_where("where title like '%" . $search . "%'");
     
        foreach ($data as $key => $game) {
            $card = "<div class=\"col-lg-3 col-sm-6 mb-4 \" onclick=\"window.location.href ='../controller/game.php?op=game&cod=" . $game["id"] . "'\">";
            $card .= "<div class=\"card\">";
            $card .= "<img class=\"card-img-top imgine\" src=\"../" . $game["wallpaper"] . "\">";
            $card .= "<div class=\"card-body\">";
            $card .= "<h5 class=\"the_game\"><span>" . $game["title"] . "</span></h5>";
            $card .= "<div class=\"text-right\"><span>R$" . number_format($game["value"], 2, ',', '.') . "</span></div>";
            $card .= "</div></div></div>";
            echo $card;
        }

        ?>

    </div>
</div>