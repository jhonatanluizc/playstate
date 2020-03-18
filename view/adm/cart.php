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
                        <th>Cliente</th>
                        <th>Game</th>
                        <th>Preço Unitário</th>
                        <th>Quantidade</th>
                        <th>Preço Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../model/cart.php");
                    require_once("../model/user.php");
                    require_once("../model/game.php");
                    $cart = new Cart();
                    $user = new User();
                    $game = new Game();


                    $data = $cart->select_where("");
                    foreach ($data as $key => $value) {

                        $id_game = $value["id_game"];
                        $game_data = $game->select_where("where id = '$id_game'");

                        $id_user = $value["id_user"];
                        $user_data = $user->select_where("where id = '$id_user'");

                        $row = "<tr>";
                        $row .= "<td>" . $value["id"] . "</td>";
                        $row .= "<td>" . $user_data[0]["name"] . "</td>";
                        $row .= "<td>" . $game_data[0]["title"] . "</td>";
                        $row .= "<td>" . $util->money_blr($game_data[0]["value"]) . "</td>";
                        $row .= "<td>" . $value["quantity"] . "</td>";
                        $row .= "<td>" . $util->money_blr($game_data[0]["value"] * $value["quantity"]) . "</td>";
                        $row .= "</tr>";
                        
                        echo $row;
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /table... -->

</div>

<?php $import->table("js") ?>