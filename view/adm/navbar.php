<!-- Navbar - menu topo -->
<nav class="menu navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="adm.php?view=home">PlayState</a>

    <ul class="navbar-nav ml-auto mr-0 mr-md-3 ">
        <li class="nav-item" style="color:white;">

            <a class="nav-link active" href="#">nome</a>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw "></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="text-center"><a class="dropdown-item" href="site.php?view=home">PlayState<a></div>
                <div class="dropdown-divider"></div>
                <div class="text-center"><a class="dropdown-item" href="login.php?login=nao">Sair</a></div>

            </div>
        </li>
    </ul>
</nav>

<div id="wrapper">
    <!-- barra lateral -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../controller/adm.php?view=clientes">
                <i class="fas fa-users"></i>
                <span>Clientes</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../controller/adm.php?view=cadastrar">
                <i class="fas fa-plus-circle"></i>
                <span>Cadastrar Game</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../controller/adm.php?view=games">
                <i class="fas fa-gamepad"></i>
                <span>Games</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../controller/adm.php?view=adquiridos">
                <i class="fas fa-shopping-cart"></i>
                <span>Games Adquiridos</span></a>
        </li>

    </ul>
    <div id="content-wrapper">