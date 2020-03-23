<?php

//classe destinada a importacoes de css e js
class Imports
{
    //uma fumcao para importar um array
    function array_import($array)
    {
        foreach ($array as $key => $value) {
            echo $value . "\n";
        }
    }

    function css()
    {
        //foi criado um array de importacoes
        $css = array(
            "style" => "<link rel=\"stylesheet\" href=\"../src/css/style.css\">"
        );
        //foi chamado a funcao para importar o array
        $this->array_import($css);
    }

    function bootstrap($type)
    {
        $css = array(
            "bootstrap" => "<link rel=\"stylesheet\" href=\"../src/vendor/bootstrap/css/bootstrap.min.css\">"
        );

        $js = array(
            "jquery" => "<script src=\"../src/vendor/jquery.js\"></script>",
            "bootstrap" => "<script src=\"../src/vendor/bootstrap/js/bootstrap.min.js\"></script>",
            "bundle" => "<script src=\"../src/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>"
        );

        if ($type == "css") {
            $this->array_import($css);
        } else if ($type == "js") {
            $this->array_import($js);
        }
    }
    function all()
    {
        //aqui o array foi inserido diretamente na funca, para assim tornar o processo mais rapido
        $this->array_import(
            array(
                "<link rel=\"stylesheet\" href=\"../src/vendor/all.css\">"
            )
        );
    }

    function fontawesome()
    {
        $this->array_import(
            array(
                "<link href=\"../src/vendor/fontawesome/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">"
            )
        );
    }


    function sb_admin()
    {
        $this->array_import(
            array(
                "<link href=\"../src/vendor/sb-admin.css\" rel=\"stylesheet\" type=\"text/css\">"
            )
        );
    }

    function table($type)
    {
        if ($type == "css") {
            $this->array_import(
                array(
                    "bootstrap4" => "<link href=\"../src/vendor/table/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\" type=\"text/css\">"
                )
            );
        }
        if ($type == "js") {
            $this->array_import(
                array(
                    "datatables" => "<script src=\"../src/vendor/table/datatables/jquery.dataTables.js\"></script>",
                    "bootstrap4" => "<script src=\"../src/vendor/table/datatables/dataTables.bootstrap4.js\"></script>",
                    "datatables_demo" => "<script src=\"../src/vendor/table/demo/datatables-demo.js\"></script>"
                )
            );
        }
    }

    function favicon()
    { ?>
        <link rel="apple-touch-icon" sizes="57x57" href="../src/public/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../src/public/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../src/public/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../src/public/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../src/public/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../src/public/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../src/public/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../src/public/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../src/public/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../src/public/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../src/public/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../src/public/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../src/public/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
<?php }
}
