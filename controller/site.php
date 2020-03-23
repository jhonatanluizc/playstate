<?php
require_once("../model/util.php");
$util = new Util();
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
    $import->favicon();
    $import->fontawesome();
    require_once($view_link . "navbar" . ".php");
    $import->bootstrap("css");
    $import->css();

    ?>

</head>
<style>
    html,
    body {
        height: 100%;
    }

    #page-content {
        flex: 1 0 auto;
    }

    #sticky-footer {
        flex-shrink: none;
    }
</style>

<body class="d-flex flex-column">
    <div id="page-content">
        <?php require_once($view_link . $page . ".php"); ?>
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; PlayState</small>
        </div>
    </footer>


    <?php
    $import->bootstrap("js");
    ?>
</body>

</html>