
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
    function all()
    {
        echo "<link rel=\"stylesheet\" href=\"../src/vendor/all.css\">";
    }

    function fontawesome()
    {
        echo "<link href=\"../src/vendor/fontawesome/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">";
    }


    function sb_admin()
    {
        echo "<link href=\"../src/vendor/sb-admin.css\" rel=\"stylesheet\" type=\"text/css\">";
    }
}
