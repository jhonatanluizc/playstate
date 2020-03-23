<?php
$id_game = $_POST["id"];

$game_in_cart = false;
if ($session_status) {
    require_once("../model/cart.php");
    $cart = new Cart();
    $id_user = $session_status["id"];
    $game_in_cart = $cart->select_where("where id_user = '$id_user' and id_game = '$id_game'");
}

?>

<style>
    .imgine2 {
        height: 60vh;
        object-fit: cover;
        object-position: center;
    }
</style>
<img class="img-fluid imgine2" width="100%" src="../<?= $_POST["wallpaper"] ?>" alt="">
<div class="container">
    <br>

    <div class="card">
        <div class="card-body">
            <div>
                <h1 class="card-title"><?= $_POST["title"] ?></h1>
                <p class="card-text">Plataforma | <?= $_POST["console"] ?></p>
                <p class="card-text">Genero | <?= $_POST["genre"] ?></p>
            </div>

            <div class="text-right">
                <h2>Preço | R$<?= $_POST["value"] ?></h2>
                <br>
                <?php if ($session_status) {
                    if ($game_in_cart) { ?>
                        <button onclick="window.location.href ='../controller/site.php?view=carrinho'" class="btn btn-primary">Gerenciar Carrinho</button>
                    <?php } else { ?>
                        <button onclick="window.location.href ='../controller/cart.php?op=add&id_game=<?= $id_game ?>'" class="btn btn-primary">Adicionar ao Carrinho</button>
                    <?php } ?>
                <?php } else { ?>
                    <button onclick="alert('Faça o login para continuar')" class="btn btn-primary">Adicionar ao Carrinho</button>
                <?php } ?>
            </div>

        </div>
    </div>

    <br>
    <div class="container p-2 my-5 text-justify">
        <h5>
            <?= $_POST["description"] ?>
        </h5>
    </div>
</div>