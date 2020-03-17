<img class="img-fluid" width="100%" src="../<?= $_POST["wallpaper"] ?>" alt="">
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
            <?= nl2br($_POST["description"]) ?>
        </p>
    </div>
</div>