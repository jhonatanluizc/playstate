<?php
class Util
{
    function money_blr($number)
    {
        return "R$" . number_format($number, 2, ',', '.');
    }

    function first_name($name)
    {

        $name = trim($name);
        $name = explode(' ', $name)[0];
        if (strlen($name) > 15) {
            $name =  substr($name, 0, 15) . "...";
        }
        $name = ucfirst($name);
        return $name;
    }
}
