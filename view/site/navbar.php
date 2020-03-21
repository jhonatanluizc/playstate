<?php if ($session_status) { ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../controller/site.php?view=home">
                <!-- <img src="http://placehold.it/150x30?text=Logo" alt=""> -->
                PlayState
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=carrinho">Carrinho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=sobre">Sobre</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <span class='dropdown-item'><?= $util->first_name($session_status["name"]) ?></span>

                            <hr>
                            <?php if ($session_status["type"] == "admin") {
                                echo " <a class='dropdown-item' href='adm.php?view=home'>Gerenciar</a>";
                            } ?>
                            <a class="dropdown-item" href="../controller/user.php?op=logout">Sair</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<?php } else { ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../controller/site.php?view=home">
                <!-- <img src="http://placehold.it/150x30?text=Logo" alt=""> -->
                PlayState
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=cadastro">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=sobre">Sobre</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<?php } ?>