<?php
$id_game = $_POST["id"];
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
                <?php if ($session_status) { ?>
                    <button onclick="window.location.href ='../controller/cart.php?op=add&id_game=<?= $id_game ?>'" class="btn btn-primary">Adicionar ao Carrinho</button>
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