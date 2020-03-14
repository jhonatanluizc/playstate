
<?php
class Imports
{
    function css()
    {
        echo "<link rel=\"stylesheet\" href=\"../src/css/style.css\">";
    }

    function bootstrap($type)
    {
        if ($type == "css") {
            echo "<link rel=\"stylesheet\" href=\"../src/vendor/bootstrap/css/bootstrap.min.css\">";
        } else if ($type == "js") {
            echo "<script src=\"../src/vendor/jquery.js\"></script>";
            echo "<script src=\"../src/vendor/bootstrap/js/bootstrap.min.js\"></script>";
            echo "<script src=\"../src/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>";
          
        }
    }

}
