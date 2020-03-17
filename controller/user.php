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
        $user->create($user_data);
        header('Location: site.php?view=home');
    } else if ($op == "login") {

        require_once("../model/session.php");
        $session = new Session();

        $user = $session->login($_POST["user"], $_POST["password"]);

        if ($user) {
            echo "<script>javascript:history.go(-2)</script>";
        }else{
            echo "<script>javascript:alert('Não foi possivel realizar o Login\\nPor favor, verifique seu login e senha')</script>";
            echo "<script>javascript:history.go(-1)</script>";
        }


    }else if ($op == "logout"){
        require_once("../model/session.php");
        $session = new Session();
        $session->logout();
        echo "<script>location.href = '../controller/site.php?view=home'</script>";
    } else {
        echo "Error 404";
    }
} else {
    echo "Error 404";
}
