<?php
include_once('../../../control/tp4/controlAuto.php');
$arregloAutos = verAutos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="../../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body>
        <?php
        include_once '../../estructura/header.php';
        ?>
        <main>
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <?php
                    $cantidad = count($arregloAutos);
                    if ($cantidad > 0) {
                        $i = 0;
                    ?>
                        <h1>Hemos encontrado <?= $cantidad ?> vehiculos.</h1>
                        <h2>Listado:</h2>
                        <?php
                        foreach ($arregloAutos as $unAuto) {
                            $i++;
                            $modelo = $unAuto->getModelo();
                            $marca = $unAuto->getMarca();
                            $patente = $unAuto->getPatente();
                            $objPersona = $unAuto->getObjPersona();
                            $nombre = $objPersona->getNombre();
                            $apellido = $objPersona->getApellido();
                        ?>
                            <div class="card border-black mb-3" style="max-width: 18rem;">
                                <div class="card-header text-center">Vehiculo Nº: <?= $i ?></div>
                                <div class="card-body text-black">
                                    <p class="card-text">
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
                        }
                    } else {
                        echo "No se encontraron registros.";
                    }
                    ?>
                    <a href="VerAutos.php"><input type="button" value="Volver" class="btn btn-dark ms-4 mb-4"></a>
                </div>
            </div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>