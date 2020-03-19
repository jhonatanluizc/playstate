<style>
    .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<header class="container">
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('../src/public/games/borderlands 3.jpeg')">
                <!--
                    <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Third Slide</h3>
                    <p class="lead">This is a description for the third slide.</p>
                </div>
                -->
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../src/public/games/borderlands 3.jpeg')">

            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../src/public/games/borderlands 3.jpeg')">

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <form class="form-inline ml-auto" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
</div>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4 text-center">
        Top
        <small>Os melhores games da semana</small>
    </h1>
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
        $data = $game->select("where id <= 4");

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
    <!-- /.row -->

</div>
<!-- /.container -->