<?php $import->table("css") ?>

<div class="container">
    <h2 class="my-4 text-center">Carrinho de Games</h2>
    <br>
    <!-- table... -->
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered bg-light" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Preço</th>
                        <th>Desconto</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../model/game.php");
                    $game = new Game();
                    $data = $game->select("");
                    foreach ($data as $key => $value) {
                        echo "<tr>";
                        echo  "<td>" . $value["id"] . "</td>";
                        echo  "<td>" . $value["title"] . "</td>";
                        echo  "<td>" . $value["value"] . "</td>";
                        echo  "<td>" . $value["discount"]*100 . "%</td>";
                        echo  "<td>" . $value["quantity"] . "</td>";
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