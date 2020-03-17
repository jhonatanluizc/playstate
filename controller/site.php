<?php
require_once("../model/session.php");

$session = new Session();
$session_status = $session->verify();


require_once("../src/imports.php");
$import = new Imports();

require_once("site_routes.php");

if (isset($_GET["view"]) && isset($view_pages[$_GET["view"]])) {
    $view = $_GET["view"];
    $page = $view_pages[$view];
} else {
    $view = "404";
    $page =  $view_pages["404"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayState - <?= $view ?></title>
    <?php
    require_once($view_link . "navbar" . ".php");
    $import->bootstrap("css");
    $import->css();
    require_once($view_link . $page . ".php");
    ?>

</head>

<body>


    <?php
    $import->bootstrap("js");
    ?>
</body>

</html>