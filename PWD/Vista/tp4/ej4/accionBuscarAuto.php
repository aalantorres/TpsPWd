<?php
include_once('../../../Utils/herramienta.php');
$metodo = datos_subidos();
include_once('../../../control/tp4/controlAuto.php');
$resultado = consultaPatente($metodo['dominio']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body>
        <?php
        include_once '../../estructura/header.php';
        ?>
        <main>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <?php
                    if ($resultado['encuentra']) {
                    ?>
                        <div class="card text-dark bg-light mb-3 mt-5" style="max-width: 18rem;">
                            <div class="card-header text-center">Vehiculo encontrado</div>
                            <?php
                            $modelo = $resultado['objeto']->getModelo();
                            $marca = $resultado['objeto']->getMarca();
                            $patente = $resultado['objeto']->getPatente();
                            $objPersona = $resultado['objeto']->getObjPersona();
                            $nombre = $objPersona->getNombre();
                            $apellido = $objPersona->getApellido();
                            ?>
                            <div class="card-body">
                                <ul>
                                    <li>Patente: <?= $patente ?></li>
                                    <li>Marca: <?= $marca ?></li>
                                    <li>Modelo: <?= $modelo ?></li>
                                    <li>Su dueño es: <?= $nombre ?> <?= $apellido ?></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <h1><?= $resultado['error'] ?></h1>
                    <?php }
                    ?>
                    <a href="buscarAuto.php"><input type="button" value="Volver" class="btn btn-dark"></a>
                </div>
            </div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>