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
    } else {
        echo "Error 404";
    }
} else {
    echo "Error 404";
}
