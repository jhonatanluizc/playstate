
<img class="img-fluid" width="100%" src="../src/public/games/borderlands3.jpg" alt="">
<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?= $_POST["title"] ?></h1>
            <p class="card-text"><?= $_POST["genre"] ?></p>
            <div class="text-right">
                <span>R$<?= $_POST["value"] ?></span>
                <button>add</button>
            </div>
        </div>
    </div>
    <br>
    <div class="text-justify">
        <p>
            <?= $_POST["description"] ?>
        </p>
    </div>
</div>