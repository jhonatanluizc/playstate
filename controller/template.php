<?php
require_once("../src/imports.php");
$import = new Imports();


require_once("routes.php");

if (isset($_GET["view"]) && isset($redirect[$_GET["view"]])) {
    $view = $_GET["view"];
    $page = $redirect[$view];
} else {
    $view = "404";
    $page =  $redirect["404"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayState - <?= $view ?></title>
    <?php
    require_once("../view/navbar.php");
    $import->bootstrap("css");
    $import->css();
    require_once($page);
    ?>

</head>

<body>


    <?php
    $import->bootstrap("js");
    ?>
</body>

</html>