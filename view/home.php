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

    .card,
    .card img {
        border-radius: 0px;
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
            <div class="carousel-item active" style="background-image: url('../src/public/games/gow4.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">First Slide</h3>
                    <p class="lead">This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../src/public/games/gow4.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Second Slide</h3>
                    <p class="lead">This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../src/public/games/gow4.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Third Slide</h3>
                    <p class="lead">This is a description for the third slide.</p>
                </div>
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

<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4 text-center">
        Top
        <small>Os melhores games da semana</small>
    </h1>

    <div class="row">
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <a href="#"><img class="card-img-top" src="../src/public/games/gow4.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <span>God of war 4</span>
                    </h4>
                    <div class="text-right">
                    <span>R$59,90</span>
                    <button>add</button>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <a href="#"><img class="card-img-top" src="../src/public/games/gow4.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <span>Project One</span>
                    </h4>
                    <p class="card-text">Nome do jogo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <a href="#"><img class="card-img-top" src="../src/public/games/gow4.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <span>Project One</span>
                    </h4>
                    <p class="card-text">Nome do jogo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <a href="#"><img class="card-img-top" src="../src/public/games/gow4.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <span>Project One</span>
                    </h4>
                    <p class="card-text">Nome do jogo</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->