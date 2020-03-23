<?php if ($_POST["paymentMethod"] == "bankslip") { ?>

    <?php
    require_once("../model/cart.php");
    $cart = new Cart();
    $cart->clear($session_status["id"]);

    $total = $util->money_blr($_POST["price"]);
    $pagador = trim($_POST["firstname"]) . " " . trim($_POST["lastname"]);
    $endereco = trim($_POST["address"]) . " - " . trim($_POST["city"]) . "/" . trim($_POST["state"]) . " - CEP " . trim($_POST["zip"]);
    $pagador = ucwords(strtolower($pagador));
    $endereco = ucwords(strtolower($endereco));

    $boletoNumber = "34191.12345 67890.101112 13141.516171 8 ";
    $boletoNumber .= rand(1000000, 9999999);
    $boletoNumber .= rand(1000000, 9999999);
    ?>
    <style>
        body {
            font-family: "Arial";
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        .document {
            margin: auto auto;
            width: 216mm;
            background-color: #fff;
        }

        table {
            width: 100%;
            position: relative;
            border-collapse: collapse;
        }

        .bankLogo {
            width: 28%;
        }

        .boletoNumber {
            width: 62%;
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
            right: 20px;
        }

        td {
            position: relative;
        }

        .title {
            position: absolute;
            left: 0px;
            top: 0px;
            font-size: 12px;
            font-weight: bold;
        }

        .text {
            font-size: 12px;
        }

        p.content {
            padding: 0px;
            width: 100%;
            margin: 0px;
            font-size: 12px;
        }

        .sideBorders {
            border-left: 1px solid black;
            border-right: 1px solid black;
        }

        hr {
            size: 1;
            border: 1px dashed;
        }

        .print {
            /* TODO(dbeam): reconcile this with overlay.css' .default-button. */
            background-color: rgb(77, 144, 254);
            background-image: linear-gradient(to bottom, rgb(77, 144, 254), rgb(71, 135, 237));
            border: 1px solid rgb(48, 121, 237);
            color: #fff;
            text-shadow: 0 1px rgba(0, 0, 0, 0.1);
        }

        .btnDefault {
            font-kerning: none;
            font-weight: bold;
        }

        .btnDefault:not(:focus):not(:disabled) {
            border-color: #808080;
        }

        button {
            border: 1px;
            padding: 5px;
            line-height: 20px;
        }
    </style>
    <div class="container">
        <br />
        <div class="headerBtn" id="headerBtn">
            <div style="text-align:right;">
                <button class="no-print btnDefault print" onclick="window.print()">
                    <i class="icss-print"></i>
                    <span class="align">&nbspImprimir</span>
                </button>
            </div>
        </div>
        <br />
        <div class="document">
            <table cellspacing="0" cellpadding="0">
                <tr class="topLine">
                    <td class="bankLogo">
                        <img src="../src/public/invoice/logo.png" alt="">
                    </td>
                    <td class="sideBorders center">
                        <span style="font-size:24px;font-weight:bold;">341-7</span>
                    </td>
                    <td class="boletoNumber center">
                        <span><?= $boletoNumber ?></span>
                    </td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" border="1">
                <tr>
                    <td width="70%" colspan="6">
                        <span class="title">Local de Pagamento</span>
                        <br />
                        <span class="text">
                            ATÉ O VENCIMENTO EM QUALQUER BANCO OU CORRESPONDENTE NÃO BANCÁRIO, APÓS O VENCIMENTO, PAGUE EM QUALQUER BANCO OU CORRESPONDENTE NÃO BANCÁRIO
                        </span>
                    </td>
                    <td width="30%">
                        <span class="title">Data de Vencimento</span>
                        <br />
                        <br />
                        <p class="content right text" style="font-weight:bold;">
                            <?= date('d/m/Y', strtotime('+7 days', strtotime('now'))); ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="70%" colspan="6">
                        <span class="title">Nome do Beneficiário / Endereço:</span>
                        <br />
                        <table border="0" style="border:none">
                            <tr>
                                <td width="60%">
                                    <span class="text">PlayState</span>
                                </td>
                            </tr>
                        </table>
                        <br />
                        <span class="text">Rua Capitão Avelino Bastos, 8000 - Centro - Cruzeiro/SP - 12701-44</span>
                    </td>
                    <td width="30%">
                        <span class="title">Agência/Código Beneficiário</span>
                        <br />
                        <br />
                        <p class="content right">1234/12345-1</p>
                    </td>
                </tr>

                <tr>
                    <td width="15%">
                        <span class="title">Data do Documento</span>
                        <br />
                        <p class="content center">
                            <?= date('d/m/Y', strtotime('now')); ?>
                        </p>
                    </td>
                    <td width="17%" colspan="2">
                        <span class="title">Num. do Documento</span>
                        <br />
                        <p class="content center">1</p>
                    </td>
                    <td width="10%">
                        <span class="title">Espécie doc</span>
                        <br />
                        <p class="content center">DM</p>
                    </td>
                    <td width="8%">
                        <span class="title">Aceite</span>
                        <br />
                        <p class="content center">N</p>
                    </td>
                    <td>
                        <span class="title">Data Processamento</span>
                        <br />
                        <p class="content center"><?= date('d/m/Y', strtotime('now')); ?></p>
                    </td>
                    <td width="30%">
                        <span class="title">Carteira/Nosso Número</span>
                        <br />
                        <br />
                        <p class="content right">157/12345678-9</p>
                    </td>
                </tr>

                <tr>
                    <td width="15%">
                        <span class="title">Uso do Banco</span>
                        <br />
                        <p class="content center">&nbsp;</p>
                    </td>
                    <td width="10%">
                        <span class="title">Carteira</span>
                        <br />
                        <p class="content center">157</p>
                    </td>
                    <td width="10%">
                        <span class="title">Espécie</span>
                        <br />
                        <p class="content center">R$</p>
                    </td>
                    <td width="8%" colspan="2">
                        <span class="title">Quantidade</span>
                        <br />
                        <p class="content center">N</p>
                    </td>
                    <td>
                        <span class="title">Valor</span>
                        <br />
                        <p class="content center"><?= $total ?></p>
                    </td>
                    <td width="30%">
                        <span class="title">(=) Valor do Documento</span>
                        <br />
                        <br />
                        <p class="content right"><?= $total ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" rowspan="4">
                        <span class="title">Instruções de responsabilidade do BENEFICIÁRIO. Qualquer dúvida sobre este boleto contate o beneficiário.</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(-) Descontos/Abatimento</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(+) Juros/Multa</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(=) Valor Pago</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <table border="0" style="border:none">
                            <tr>
                                <td width="60%"><span class="text"><b>Nome do Pagador: </b> <?= $pagador ?></span></td>
                            </tr>
                            <tr>
                                <td><span class="text"><b>Endereço: </b> <?= $endereco ?></span></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <hr>
            <table cellspacing="0" cellpadding="0">
                <tr class="topLine">
                    <td class="bankLogo">
                        <img src="../src/public/invoice/logo.png" alt="">
                    </td>
                    <td class="sideBorders center">
                        <span style="font-size:24px;font-weight:bold;">341-7</span>
                    </td>
                    <td class="boletoNumber center">
                        <span><?= $boletoNumber ?></span>
                    </td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" border="1">
                <tr>
                    <td width="70%" colspan="6">
                        <span class="title">Local de Pagamento</span>
                        <br />
                        <span class="text">
                            ATÉ O VENCIMENTO EM QUALQUER BANCO OU CORRESPONDENTE NÃO BANCÁRIO, APÓS O VENCIMENTO, PAGUE EM QUALQUER BANCO OU CORRESPONDENTE NÃO BANCÁRIO
                        </span>
                    </td>
                    <td width="30%">
                        <span class="title">Data de Vencimento</span>
                        <br />
                        <br />
                        <p class="content right text" style="font-weight:bold;">
                            <?= date('d/m/Y', strtotime('+7 days', strtotime('now'))); ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="70%" colspan="6">
                        <span class="title">Nome do Beneficiário / Endereço:</span>
                        <br />
                        <table border="0" style="border:none">
                            <tr>
                                <td width="60%">
                                    <span class="text">PlayState</span>
                                </td>
                            </tr>
                        </table>
                        <br />
                        <span class="text">Rua Capitão Avelino Bastos, 8000 - Centro - Cruzeiro/SP - 12701-44</span>
                    </td>
                    <td width="30%">
                        <span class="title">Agência/Código Beneficiário</span>
                        <br />
                        <br />
                        <p class="content right">1234/12345-1</p>
                    </td>
                </tr>

                <tr>
                    <td width="15%">
                        <span class="title">Data do Documento</span>
                        <br />
                        <p class="content center">
                            <?= date('d/m/Y', strtotime('now')); ?>
                        </p>
                    </td>
                    <td width="17%" colspan="2">
                        <span class="title">Num. do Documento</span>
                        <br />
                        <p class="content center">1</p>
                    </td>
                    <td width="10%">
                        <span class="title">Espécie doc</span>
                        <br />
                        <p class="content center">DM</p>
                    </td>
                    <td width="8%">
                        <span class="title">Aceite</span>
                        <br />
                        <p class="content center">N</p>
                    </td>
                    <td>
                        <span class="title">Data Processamento</span>
                        <br />
                        <p class="content center"><?= date('d/m/Y', strtotime('now')); ?></p>
                    </td>
                    <td width="30%">
                        <span class="title">Carteira/Nosso Número</span>
                        <br />
                        <br />
                        <p class="content right">157/12345678-9</p>
                    </td>
                </tr>

                <tr>
                    <td width="15%">
                        <span class="title">Uso do Banco</span>
                        <br />
                        <p class="content center">&nbsp;</p>
                    </td>
                    <td width="10%">
                        <span class="title">Carteira</span>
                        <br />
                        <p class="content center">157</p>
                    </td>
                    <td width="10%">
                        <span class="title">Espécie</span>
                        <br />
                        <p class="content center">R$</p>
                    </td>
                    <td width="8%" colspan="2">
                        <span class="title">Quantidade</span>
                        <br />
                        <p class="content center">N</p>
                    </td>
                    <td>
                        <span class="title">Valor</span>
                        <br />
                        <p class="content center"><?= $total ?></p>
                    </td>
                    <td width="30%">
                        <span class="title">(=) Valor do Documento</span>
                        <br />
                        <br />
                        <p class="content right"><?= $total ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" rowspan="4">
                        <span class="title">Instruções de responsabilidade do BENEFICIÁRIO. Qualquer dúvida sobre este boleto contate o beneficiário.</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(-) Descontos/Abatimento</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(+) Juros/Multa</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="title">(=) Valor Pago</span>
                        <br />
                        <p class="content right">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <table border="0" style="border:none">
                            <tr>
                                <td width="60%"><span class="text"><b>Nome do Pagador: </b> <?= $pagador ?></span></td>
                            </tr>
                            <tr>
                                <td><span class="text"><b>Endereço: </b> <?= $endereco ?></span></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br />
            <img src="../src/public/invoice/bar.png" alt="">
            <br />
            <br />
        </div>
        <br>
    </div>

<?php } else { ?>

    <style>
        body {
            font-family: "Arial";
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        .document {
            margin: auto auto;
            width: 215mm;
            background-color: #fff;
            padding: 12px;
        }

        table {
            width: 100%;
            position: relative;
            border-collapse: collapse;
        }

        .bankLogo {
            width: 28%;
        }

        .boletoNumber {
            width: 62%;
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
            right: 20px;
        }

        td {
            position: relative;
        }

        .title {
            position: absolute;
            left: 0px;
            top: 0px;
            font-size: 12px;
            font-weight: bold;
        }

        .text {
            font-size: 12px;
        }

        p.content {
            padding: 0px;
            width: 100%;
            margin: 0px;
            font-size: 12px;
        }

        .sideBorders {
            border-left: 1px solid black;
            border-right: 1px solid black;
        }

        hr {
            size: 1;
            border: 1px dashed;
        }

        .print {
            /* TODO(dbeam): reconcile this with overlay.css' .default-button. */
            background-color: rgb(77, 144, 254);
            background-image: linear-gradient(to bottom, rgb(77, 144, 254), rgb(71, 135, 237));
            border: 1px solid rgb(48, 121, 237);
            color: #fff;
            text-shadow: 0 1px rgba(0, 0, 0, 0.1);
        }

        .btnDefault {
            font-kerning: none;
            font-weight: bold;
        }

        .btnDefault:not(:focus):not(:disabled) {
            border-color: #808080;
        }

        button {
            border: 1px;
            padding: 5px;
            line-height: 20px;
        }

        .bb-1 {
            border-bottom: 1px solid black;
            width: 100%;
        }

        .cel {
            margin-left: 1px;
            margin-right: 1px;
            font-size: 12px;
        }
    </style>
    <?php
    $total = $util->money_blr($_POST["price"]);
    $pagador = trim($_POST["firstname"]) . " " . trim($_POST["lastname"]);
    $address =  ucwords(strtolower(trim($_POST["address"])));
    $city =  ucwords(strtolower(trim($_POST["city"]) . "/" . trim($_POST["state"])));
    $zip =  ucwords(strtolower(trim($_POST["zip"])));
    $pagador = ucwords(strtolower($pagador));

    require_once("../model/cart.php");
    require_once("../model/game.php");
    $cart = new Cart();
    $game = new Game();

    $id_user = $session_status["id"];
    $data = $cart->select_where("where id_user = '$id_user'");
    $total = 0;


    ?>
    <div class="container">
        <br />
        <div class="headerBtn" id="headerBtn">
            <div style="text-align:right;">
                <button class="no-print btnDefault print" onclick="window.print()">
                    <i class="icss-print"></i>
                    <span class="align">&nbspImprimir</span>
                </button>
            </div>
        </div>
        <br />

        <div class="document">
            <table cellspacing="0" cellpadding="0" border="2">
                <tr>
                    <td class="text-center">
                        <h3><b>Declaração de Conteúdo</b></h3>
                    </td>
                </tr>
            </table>
            <br>

            <table cellspacing="0" cellpadding="0" border="2">
                <tr>
                    <td width="100%" colspan="6">
                        <div class="center bb-1" width="100%">
                            <b>R E M E T E N T E</b>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">NOME</span>:</b>
                            <span class="text">PlayState</span>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">ENDEREÇO</span>:</b>
                            <span class="text">
                                Rua Capitão Avelino Bastos, 8000 - Centro
                            </span>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">CIDADE</span>:</b>
                            <span class="text"> Cruzeiro/SP</span>
                        </div>
                        <div class="">
                            <b class="cel"><span class="cel">CEP</span>:</b>
                            <span class="text">12701-444</span>
                        </div>

                    </td>
                </tr>
            </table>
            <br>
            <table border="2">
                <tr>
                    <td width="100%" colspan="6">
                        <div class="center bb-1" width="100%">
                            <b>D E S T I N A T Á R I O</b>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">NOME</span>:</b>
                            <span class="text"><?= $pagador ?></span>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">ENDEREÇO</span>:</b>
                            <span class="text"><?= $address ?></span>
                        </div>
                        <div class="bb-1">
                            <b class="cel"><span class="cel">CIDADE</span>:</b>
                            <span class="text"><?= $city ?></span>
                        </div>
                        <div class="">
                            <b class="cel"><span class="cel">CEP</span>:</b>
                            <span class="text"><?= $zip ?></span>
                        </div>

                    </td>
                </tr>

            </table>

            <br>
            <table border="2">
                <tr>
                    <td width="100%" colspan="6">
                        <div class="center bb-1" width="100%">
                            <b>I D E N T I F I C A Ç Ã O &nbsp; D O S &nbsp; B E N S</b>
                        </div>
                        <div class="bb-1">
                            <div class="row">
                                <div class="col-6 ">
                                    <b class="cel"><span class="cel">NOME</span></b>
                                </div>
                                <div class="col-2 center">
                                    <b class="cel"><span class="cel">QUANTIDADE</span></b>
                                </div>
                                <div class="col-2 center">
                                    <b class="cel"><span class="cel">PREÇO</span></b>
                                </div>
                                <div class="col-2 center">
                                    <b class="cel"><span class="cel">SUBTOTAL</span></b>
                                </div>
                            </div>
                        </div>

                        <?php foreach ($data as $key => $value) {
                            $id_game = $value["id_game"];
                            $game_data = $game->select_where("where id = '$id_game'");
                            $total = $total + $game_data[0]["value"] * $value["quantity"];
                        ?>
                            <div class="bb-1">
                                <div class="row">
                                    <div class="col-6 ">
                                        <span class="text">
                                            <?= ucwords($game_data[0]["title"]) ?>

                                        </span>
                                    </div>
                                    <div class="col-2 center">
                                        <b class="cel"><span class="cel"><?= $value["quantity"] ?></span></b>
                                    </div>
                                    <div class="col-2 center">
                                        <b class="cel"><span class="cel"><?= $util->money_blr($game_data[0]["value"]) ?></span></b>
                                    </div>
                                    <div class="col-2 center">
                                        <b class="cel"><span class="cel"><?= $util->money_blr($value["quantity"] * $game_data[0]["value"]) ?></span></b>
                                    </div>

                                </div>
                            </div>

                        <?php } ?>

                        <div class="">
                            <div class="row">
                                <div class="col-8">

                                </div>
                                <div style="font-size: 20px;" class="col-4 ml-auto"><b class="">TOTAL: </span><?= $util->money_blr($total) ?></b>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            </table>
            <br>
            <table border="2">
                <tr>
                    <td width="100%" colspan="6">
                        <div class="center bb-1" width="100%">
                            <b>D E C L A R A Ç Ã O</b>
                        </div>
                        <div class="">
                            <span class="text">
                                <p>Declaro que não me enquadro no conceito de contribuinte previsto no art. 4º da Lei Complementar no 87/1996, uma vez que não realizo,
                                    com habitualidade ou em volume que caracterize intuito comercial, operações de circulação de mercadoria, ainda que se iniciem no exterior,
                                    ou estou dispensado da emissão da nota fiscal por força da legislação tributária vigente, responsabilizando-me, nos termos da lei e a quem de
                                    direito, por informações inverídicas.
                                </p>
                                <p>
                                    Declaro ainda que não estou postando conteúdo inflamável, explosivo, causador de combustão espontânea, tóxico, corrosivo, gás ou
                                    qualquer outro conteúdo que constitua perigo, conforme o art. 13 da Lei Postal no 6.538/78.
                                </p>
                            </span>
                        </div>

                    </td>
                </tr>

            </table>
        </div>

    </div>


    <br>
    </div>

<?php

    require_once("../model/cart.php");
    $cart = new Cart();
    $cart->clear($session_status["id"]);
}

?>