<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/css_info.css">
    <script src="asset/js/scrip.js"></script>


</head>

<body class="my-background">
    <?php
    $tramite = $_POST['s_tramite'];
    $sostendor = $_POST['s_sostenedor'];
    $tenencia = $_POST['s_tenencia'];
    $plan = $_POST['s_planprograma'];

    $cadena = $tramite . "-" . $sostendor . "-" . $tenencia . "-" . $plan . ".html";
    $cadena2 = "1-1-1-1.html"; ?>


    <iframe class="iframe" src="info/<?php echo $cadena ?>" frameborder="0"></iframe>

    <div class="div_gris_info">
        <h1 class="h1_centrada">Archivos adjuntos</h1>
        <div class="inline">

            <button class="boton_descargar_elementos"><a
                    href="https://secreduc04.cl/recofi2023/formatos/oficio_conductor_solicitudes_con_curso2021.pdf">Oficio
                    Conductor</a></button>
            <button class="boton_descargar_elementos"><a
                    href="asset/pauta/solicitud_unica_reconocimiento_oficial (1).xls">Solicitud Unica</a></button>
        </div>

        <button class="boton_inicio"><a href="cotejo.php">Volver Al Menu</a></button>

    </div>




</body>

</html>