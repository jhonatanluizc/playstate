<?php

$import->table("css")

?>

<div class="container">
    <h2 class="my-4 text-center">Carrinho de Games</h2>
    <br>
    <!-- table... -->
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered bg-light" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Protocolo</th>
                        <th>Game</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../model/cart.php");

                    require_once("../model/game.php");
                    $game = new Game();

                    $cart = new Cart();
                    $id_user = $session_status["id"];
                    $data = $cart->select_where("where id_user = '$id_user'");
                    foreach ($data as $key => $value) {
                        echo "<tr>";

                        $id_game = $value["id_game"];
                        $game_data = $game->select_where("where id = '$id_game'");
                        echo  "<td>" . $value["id"] . "</td>";
                        echo  "<td>" . $game_data[0]["title"] . "</td>";
                        echo  "<td>" . $value["quantity"] . "</td>";
                        echo  "<td>" . $game_data[0]["value"] * $value["quantity"] . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /table... -->

</div>

<?php $import->table("js") ?>