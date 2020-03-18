<?php
require_once("../model/cart.php");

if (isset($_GET["op"])) {
    $op = $_GET["op"];

    if ($op == "add") {
        $cart = new Cart();
        $cart->add($user_id, $id_game);
    } else if ($op == "carts") {
        require_once("../model/cart.php");
        $cart = new Cart();
        $data = $cart->select_where("where user_id = ' " . $session_status["id"] . "'");
        $data = $data[0];

?>
        <script>
            function sub() {
                document.getElementById("cart").submit();
            }
        </script>

        <style>
            form {
                display: none;
            }
        </style>

        <body onload="sub()">
            <form id="cart" method="POST" action="../controller/site.php?view=carrinho">
                <input type="text" name="user_id" value="<?php echo $session_status["id"]; ?>">
            </form>
        </body>
<?php
    }
} else {
    echo "Error 404";
}
