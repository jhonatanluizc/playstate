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

    function card_generation($data)
    {
        $cont = 0;
        foreach ($data as $key => $game) {
            $card = "<div class=\"col-lg-3 col-sm-6 mb-4 \" onclick=\"window.location.href ='../controller/game.php?op=game&cod=" . $game["id"] . "'\">";
            $card .= "<div class=\"card\">";
            $card .= "<img class=\"card-img-top imgine\" src=\"../" . $game["wallpaper"] . "\">";
            $card .= "<div class=\"card-body\">";
            $card .= "<h5 class=\"the_game\"><span>" . $game["title"] . "</span></h5>";
            $card .= "<div class=\"text-right\"><span>R$" . number_format($game["value"], 2, ',', '.') . "</span></div>";
            $card .= "</div></div></div>";
            echo $card;
            $cont++;
        }
        return $cont;
    }
}
