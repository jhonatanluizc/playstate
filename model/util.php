<?php
class Util
{
    function money_blr($number)
    {
        return "R$" . number_format($number, 2, ',', '.');
    }
}
