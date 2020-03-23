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
?>
            <div class="col-lg-3 col-sm-6 mb-4" onclick="window.location.href ='../controller/game.php?op=game&cod=<?= $game['id'] ?>'">
                <div class="card">
                    <img class="card-img-top imgine" src="../<?= $game['wallpaper'] ?>">
                    <div class="card-body">
                        <h5 class="the_game"><span><?= $game["title"] ?></span></h5>
                            <div class="row ml-2 mr-2">
                                <div class="mr-auto text-center"><?= $game["console"] ?></div>
                                <div class="ml-auto text-center"><?= $this->money_blr($game["value"]) ?></div>
                            </div>
           
                    </div>
                </div>
            </div>
<?php
            $cont++;
        }
        return $cont;
    }
}
