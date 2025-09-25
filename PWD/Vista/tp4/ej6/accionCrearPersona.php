<?php
include_once('../../../Utils/herramienta.php');
$datosForm = datos_subidos();
include_once('../../../control/tp4/controlPersona.php');
$resultado = insertarPersona($datosForm);
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

    <body>
        <?php
        include_once '../../estructura/header.php';
        ?>
        <main>
            <div class="container w-50 text center mt-5">
                <div class="pantalla-texto">
                    <?php
                    if ($resultado['inserta']) {
                    ?>
                        <h2>Persona agregada con éxito.</h2>
                    <?php
                    } else {
                    ?>
                        <h2><?= $resultado['error'] ?>.</h2>
                    <?php
                    } ?>
                    <a href="nuevaPersona.php"><input type="button" value="Volver" class="btn btn-dark"></a>
                </div>
            </div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>