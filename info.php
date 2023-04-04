<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Reconocimiento Oficial</title>
    <link rel="stylesheet" href="asset/css/css_info.css">
    <script src="asset/js/scrip.js"></script>
    <link rel="shortcut icon" href="asset/img/logo-gobierno.png" type="image/x-icon">


</head>

<body class="my-background">
    <?php
    /*hacer una funcion que reciba los parametros y retornar la cadena*/
    function crearurl(){
        $cadena = "";
        $tramite = $_POST['s_tramite'];
        $sostendor = $_POST['s_sostenedor'];
        $tenencia = $_POST['s_tenencia'];
        $plan = $_POST['s_planprograma'];

        //si tenencia y plan son 0 entonces cargar
        if ($tenencia == 0 && $plan == 0) {
            $cadena = $tramite . "-" . $sostendor . ".html";
            return $cadena;
        }
        else{
            $cadena = $tramite . "-" . $sostendor . "-" . $tenencia . "-" . $plan . ".html";
            return $cadena;
        }
    }
   ?>
    <iframe class="iframe" src="info/<?php echo  $cadena = crearurl(); ?>" frameborder="0"></iframe>

    <div class="div_gris_info">
        <h1 class="h1_centrada">Archivos adjuntos</h1>
        <div class="inline">

            <button class="boton_descargar_elementos"><a
                    href="asset/Pdf/oficio_conductor.docx">Oficio
                    Conductor</a></button>
            <button class="boton_descargar_elementos"><a
                    href="asset/pauta/solicitud_unica_reconocimiento_oficial (1).xls">Solicitud Unica</a></button>
        </div>

        <button class="boton_inicio"><a href="cotejo.php">Volver Al Menu</a></button>

    </div>




</body>

</html>