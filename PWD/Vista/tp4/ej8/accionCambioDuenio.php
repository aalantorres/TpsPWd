<?php
    include_once('../../../Utils/herramienta.php');
    $datosForm = datos_subidos();
    include_once('../../../control/tp4/controlAuto.php');
    $buscaAuto = consultaPatente($datosForm['dominio']);
    $existeAuto = $buscaAuto['encuentra'];
    $objAuto = $buscaAuto['objeto'];
    $errorAuto = $buscaAuto['error'];
    include_once('../../../control/tp4/controlPersona.php');
    $buscaPersona = buscarPersona($datosForm['dni']);
    $existePersona = $buscaPersona['encuentra'];
    $objPersona = $buscaPersona['persona'];
    $nombre = $objPersona->getNombre();
    $apellido = $objPersona->getApellido();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
        if(!$existeAuto){
            echo "<p style='color:red'>Error: ".$errorAuto."</p>";
        } elseif(!$existePersona){
            echo "<p style='color:red'>Error: La persona no se encuentra registrada.</p>";
        } else {
            // Actualizamos dueño
            $objAuto->setObjPersona($objPersona);
            $exito = $objAuto->actualizarDuenio();

            if($exito){
                echo "<p>El dueño del auto con patente ".$datosForm['dominio']." se actualizó correctamente.</p>";
            } else {
                echo "<p style='color:red'>Error al actualizar el dueño del auto.</p>";
            }
        }
        ?>
    </div>
</body>
</html>