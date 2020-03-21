<div class="container">
    <div class="py-5 text-center">

        <h2>Formas de Pagamento</h2>
        <p class="lead"></p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Seu carrinho</span>
                <span id="quantity_cart" class="badge badge-secondary badge-pill">0</span>
            </h4>
            <ul class="list-group mb-3">
                <?php
                require_once("../model/cart.php");
                $cart = new Cart();
                require_once("../model/game.php");
                $game = new Game();

                $id_user = $session_status["id"];

                $cart_data = $cart->select_where("where id_user = '$id_user'");

                $total = 0;
                $quantity = 0;
                foreach ($cart_data as $key => $value) {

                    $id_game = $value["id_game"];
                    $game_data = $game->select_where("where id = '$id_game'");
                    $game_data = $game_data[0];

                    echo "<li class='list-group-item d-flex justify-content-between lh-condensed'>";
                    echo "<div>";
                    echo "<h6 class='my-0'>" . $game_data["title"] . "</h6>";
                    echo "<small class='text-muted'> " . $value["quantity"] . " * " . $util->money_blr($game_data["value"]) . "</small>";
                    echo "</div>";
                    echo "<span class='text-muted'>" . $util->money_blr($game_data["value"] * $value["quantity"]) . "</span>";

                    $total += ($game_data["value"] * $value["quantity"]);
                    $quantity++;
                }

                ?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BRL)</span>
                    <strong><?= $util->money_blr($total) ?></strong>
                    <script>
                        var element = document.getElementById("quantity_cart");
                        element.innerHTML = "<?= $quantity ?>";
                    </script>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Dados de Envio</h4>
            <form method="post" action="../controller/cart.php?op=clear">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Primeiro nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" id="address" placeholder="Rua, Número - Bairro" required>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Pais</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option>Brasil</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Estado</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option>SP</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">CEP</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                    </div>
                </div>


                <hr class="mb-4">

                <h4 class="mb-3">Dados de Pagamento</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Cartão de Crédito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Cartão de Débito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nome completo do títular</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Número do cartão de crédito</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-expiration">Validade</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    </div>
                </div>
                <hr class="mb-4">
              
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar</button>
                
            </form>
        </div>
    </div>

</div>
<br>
<br>