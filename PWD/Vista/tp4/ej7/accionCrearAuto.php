<?php
include_once('../../../Utils/herramienta.php');
$datosForm = datos_subidos();
include_once('../../../control/tp4/controlAuto.php');
$resultado = insertarAuto($datosForm);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Personas</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../../estructura/header.php';
    ?>
    <main>
        <div class="contenedor">
            <div class="pantalla-texto">
                <?php
                if ($resultado['inserta']) {
                ?>
                    <h2>Auto agregado con éxito.</h2>
                <?php
                } else {
                ?>
                    <h2><?= $resultado['error'] ?>.</h2>
                <?php
                } ?>
                <a href="nuevoAuto.php"><input type="button" value="Volver"></a>
            </div>
        </div>
    </main>
    <?php
    include_once('../../estructura/footer.php');
    ?>
</body>

</html>