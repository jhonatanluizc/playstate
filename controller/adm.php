<?php
require_once("../src/imports.php");
$import = new Imports();

require_once("adm_routes.php");

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
    $import->fontawesome();
    $import->bootstrap("css");
    $import->css();
    $import->sb_admin();
    ?>

</head>

<body>

    <?php
    require_once($view_link . "navbar" . ".php");
    require_once($view_link . $page . ".php");
    $import->bootstrap("js");
    $import->table("js");
    ?>
    </div>
    </div>
</body>

</html>