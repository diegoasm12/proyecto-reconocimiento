<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="asset/css/css.css">
  <script src="asset/js/scrip.js"></script>

</head>

<body>
<script>
  document.body.style.zoom = "79%";
</script>
  <div class="div_gris">
    <div class="div_blanco">
      <div><img class="imagen_edificio" src="asset/img/edificio.PNG" alt=""> </div>
      <div><img class="imagen_secretaria" src="asset/img/logo-secretaria.jpg" alt=""> </div>
      <div>
        <h1 class="texto_titulo">Reconocimiento oficial 2023</h1>
      </div>
      <div class="contenedor1">
        <h2 class="texto_sub">"INSTRUCTIVO SOBRE PROCEDIMIENTO ADMINISTRATIVO DE SOLICITUDES DE RECONOCIMIENTO OFICIAL
          2023"</h2>
      </div>
      <div class="div_gris_formulario">
        <div class="centrado_div_Texto">
          <h3>Buscar Tipo De Solicitudes</h3>
        </div>
        <div class="btn_divs">
          <div class="margin-bootom">
            <button class="btn_rojo"><a class="blanco" href="asset/Pdf/manual.pdf" download="manual">Manual de Reconocimiento
                Oficial</a></button>
            <button class="btn_azul"><a class="blanco" href="asset/pauta/Receso Temporal.docx" download="manual">Preguntas Frecuentes</a></button>
          </div>
        </div>
        <div class="cuadro_blanco">
          <form action="info.php" action="info.php" method="POST" onsubmit="return validaSeleccion();">
            <table width="720" border="0" cellpadding="7">
              <tr>
                <td width="180">* Tipo de Tr&aacute;mite: </td>
                <td><select id='s_tramite' name='s_tramite' tabindex='1' onclick='seleccion();'>
                    <option value='0'>Seleccione Tr&aacute;mite ...</option>
                    <option value='1'>Establecimiento Nuevo pagado</option>
                    <option value='2'>Establecimiento nuevo con subvenci&oacute;n normal</option>
                    <option value='3'>Establecimiento nuevo con Financiamiento Compartido</option>
                    <option value='4'>Solicitud Jardin Infantil pagado</option>
                    <option value='5'>Solicitud Jardin Infantil con subvenci&oacute;n</option>
                    <option value='6'>Solicitud Jardin Infantil con Financiamiento Compartido</option>
                    <option value='7'>Ampliaci&oacute;n de Nivel/Modalidad/Ciclo/Especialidad pagado</option>
                    <option value='8'>Ampliaci&oacute;n de Nivel/Modalidad/Ciclo/Especialidad subvenci&oacute;n normal</option>
                    <option value='9'>Ampliaci&oacute;n de Nivel/Modalidad/Ciclo/Especialidad financiamiento compartido</option>
                    <option value='10'>Local Adicional o Complementario</option>
                    <option value='11'>Cambio de caracter&iacute;sticas (G&eacute;nero)</option>
                    <option value='12'>Ampliaci&oacute;n de Capacidad</option>
                    <option value='13'>Aumento de capacidad y de cursos</option>
                    <option value='14'>Aumento de Cursos</option>
                    <option value='15'>Receso Temporal</option>
                    <option value='16'>Receso Temporal Parcial</option>
                    <option value='17'>Renuncia Al R.O (Cierre definitivo)</option>
                    <option value='18'>Renuncia Parcial al R.O (Cierre definitivo parcial)</option>
                    <option value='19'>Cambio de Local</option>
                    <option value='20'>Transferencia por Adecuaci&oacute;n de Sostenedor (en un EE pagado)</option>
                    <option value='21'>Transferencia por Adecuaci&oacute;n de Sostenedor (en un EE subvencionado o FC)</option>
                    <option value='22'>Cambio de Rpte.Legal en EE pagado</option>
                    <option value='23'>Cambio de Rpte. Legal en EE subv. o FC</option>
                    <option value='24'>Acceso nuevo</option>
                    <option value='25'>Incorporaci&oacute;n a JEC</option>
                    <option value='26'>Incorporaci&oacute;n a JEC parvularia</option>
                    <option value='27'>Ingreso a JEC 1&deg; y2&deg; B&aacute;sico</option>
                    <option value='28'>Cambio de Nombre del establecimiento</option>
                    <option value='29'>De Subvencionado a Financiamiento Compartido</option>
                    <option value='30'>Financiamiento Compartido a Gratuito.</option>
                    <option value='31'>Pagado a Financiamiento Compartido.</option>
                    <option value='32'>Pagado a Gratuito.</option>
                    <option value='33'>Financiamiento Compartido a Pagado.</option>
                    <option value='34'>Gratuito a Pagado</option>
                  </select></td>
              </tr>
              <tr>
                <td width="180">* Tipo de Sostenedor:</td>
                <td> <select id='s_sostenedor' name='s_sostenedor' style='' class='' title='' tabindex=''>
                    <option value='0'>Seleccione Sostenedor ...</option>
                    <option value='1'>SOCIEDADES O EMPRESA INDIVIDUAL DE RESPONSABILIDAD LIMITADA</option>
                    <option value='2'>Corporaci&oacute;n o Fundaci&oacute;n</option>
                    <option value='3'>Congregaci&oacute;n religiosa</option>
                    <option value='4'>Alcalde o Jefe de DAEM</option>
                  </select></td>
              </tr>
              <tr id="tr_tenencia">
                <td width="180">* Tenencia Inmueble: </td>
                <td><select id='s_tenencia' name='s_tenencia' style='' class='' title='' tabindex=''>
                    <option value='0'>Seleccione Tenencia ...</option>
                    <option value='1'>Propietario</option>
                    <option value='2'>Arrendatario, comodatario o titular de otro derecho</option>
                  </select></td>
              </tr>
              <tr id="tr_planprograma">
                <td width="180">* Plan y Programa: </td>
                <td><select id='s_planprograma' name='s_planprograma' style='' class='' title='' tabindex=''>
                    <option value='0'>Seleccione Plan y Programa ...</option>
                    <option value='1'>Planes del Mineduc</option>
                    <option value='2'>Planes Propios</option>
                  </select></td>
              </tr>
              <tr>
                <td></td>
        </div>
        <td><input class="btn_rojo_ver" type="submit" name="submit" value="Buscar"><br> </td>
        </tr>

        </table>
        <h3>Los campos con asterisco (*) son obligatorios</h3>
        </form>

      </div>
    </div>





  </div>
  </div>


</body>

</html>