<?php
require_once("../model/user.php");

if (isset($_GET["op"])) {

    $op = $_GET["op"];

    if ($op == "register") {
        $user_data = array(
            "name" => $_POST["name"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "type" => "user"
        );
        $user = new User();


        $check_username = $user->select_where("where username = '" . $_POST["username"] . "'");
        $check_email = $user->select_where("where email = '" . $_POST["email"] . "'");

        if ($check_username) { ?>
            <script>
                alert("Esse Username Já Foi Utilizado");
                javascript: history.go(-1);
                //location.href = '../controller/site.php?view=cadastro';
            </script>

        <?php } else if ($check_email) { ?>
            <script>
                alert("Esse Email Já Foi Utilizado");
                javascript: history.go(-1);
            </script>
        <?php } else {
            $user->create($user_data);
            header('Location: site.php?view=login');
        }
    } else if ($op == "login") {

        require_once("../model/session.php");
        $session = new Session();

        $user = $session->login($_POST["user"], $_POST["password"]);

        if ($user) {
            echo "<script>location.href = '../controller/site.php?view=home'</script>";
        } else {
            echo "<script>javascript:alert('Não foi possivel realizar o Login\\nPor favor, verifique seu login e senha')</script>";
            echo "<script>javascript:history.go(-1)</script>";
        }
    } else if ($op == "logout") {
        require_once("../model/session.php");
        $session = new Session();
        $session->logout();
        echo "<script>location.href = '../controller/site.php?view=home'</script>";
    } else if ($op == "edit") {
        ?>
        <script>
            function sub() {
                document.getElementById("game").submit();
            }
        </script>

        <style>
            form {
                display: none;
            }
        </style>

        <body onload="sub()">
            <form id="game" method="post" action="../controller/adm.php?view=usuario">
                <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
            </form>
        </body>
<?php
    } else if ($op == "update") {
        $user_data = array(
            "id" => $_POST['id'],
            "name" => $_POST['name'],
            "username" => $_POST['username'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "type" => $_POST['type']
        );

        $user = new User();
        $user->update($user_data);
        header('Location: adm.php?view=clientes');
    } else {
        echo "Error 404";
    }
} else {
    echo "Error 404";
}
