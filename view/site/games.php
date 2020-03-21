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
        $cont = $util->card_generation($data);
       
        if ($cont == 0) {
            $data = $game->select_where("where genre like '%" . $search . "%'");
            $cont = $util->card_generation($data);
        }

        if ($cont == 0) {
            $data = $game->select_where("where description like '%" . $search . "%'");
            $cont = $util->card_generation($data);
        }

        if ($cont == 0) {
            $data = $game->select_where("where console like '%" . $search[0] . "%'");
            $cont = $util->card_generation($data);
        }

        if ($cont == 0) {
            $data = $game->select_where("");
            $cont = $util->card_generation($data);
        }

        ?>

    </div>
</div>