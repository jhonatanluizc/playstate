<?php
require_once("../model/cart.php");

if (isset($_GET["op"])) {
    $op = $_GET["op"];

    if ($op == "add") {

        require_once("../model/session.php");
        $session = new Session();
        $session_status = $session->verify();

        $cart = new Cart();
        $cart->add($session_status["id"], $_GET["id_game"]);

        echo "<script>javascript:alert('Game adicionado ao seu carrinho')</script>";
        echo "<script>window.location.href ='game.php?op=game&cod= " . $_GET["id_game"] . "'</script>";
    } else if ($op == "more") {

        require_once("../model/session.php");
        $session = new Session();
        $session_status = $session->verify();

        $cart = new Cart();
        $cart->sum($session_status["id"], $_GET["id_game"], +1);

        echo "<script>window.location.href ='site.php?view=carrinho'</script>";
    } else if ($op == "minus") {

        require_once("../model/session.php");
        $session = new Session();
        $session_status = $session->verify();

        $cart = new Cart();
        $cart->sum($session_status["id"], $_GET["id_game"], -1);

        echo "<script>window.location.href ='site.php?view=carrinho'</script>";
    } else if ($op == "clear") {
        require_once("../model/session.php");
        $session = new Session();
        $session_status = $session->verify();

        $cart = new Cart();
        $cart->clear($session_status["id"]);

        echo "<script>window.location.href ='site.php?view=carrinho'</script>";
    } else if ($op == "carts") {
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
<?php }
} else {
    echo "Error 404";
}
