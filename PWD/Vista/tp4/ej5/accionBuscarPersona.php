<?php
include_once('../../../Utils/herramienta.php');
$datosForm = datos_subidos();
include_once('../../../control/tp4/controlPersona.php');
$resultado = buscarAutoPersona($datosForm['dni']);
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
            <div class="container w-50 mt-5">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <?php
                    $encuentra = $resultado['encuentra'];
                    $error = $resultado['error'];
                    $arregloAutos = $resultado['arreglo'];
                    $unaPersona = $resultado['persona'];
                    $cantidad = count($arregloAutos);
                    $nombre = $unaPersona->getNombre();
                    $apellido = $unaPersona->getApellido();
                    $dni = $unaPersona->getNroDni();
                    $nacimiento = $unaPersona->getFechaNac();
                    $telefono = $unaPersona->getTelefono();
                    $domicilio = $unaPersona->getDomicilio();
                    $anio = substr($nacimiento, 0, 4);
                    $mes = substr($nacimiento, 5, 2);
                    $dia = substr($nacimiento, 8, 2);
                    if ($encuentra) {
                    ?>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header fw-bold text-center">Persona Encontrada</div>
                            <div class="card-body text-dark">
                                <p class="card-text">
                                <ul>
                                    <li>Nombre: <?= $nombre ?></li>
                                    <li>Apellido: <?= $apellido ?></li>
                                    <li>Dni N°: <?= $dni ?></li>
                                    <li>Fecha de nacimiento: <?= $dia ?>/<?= $mes ?>/<?= $anio ?></li>
                                    <li>Telefono: <?= $telefono ?></li>
                                    <li>Domicilio: <?= $domicilio ?></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <?php
                        if ($cantidad > 0) {
                        ?>
                            <h2>La persona tiene <?= $cantidad ?> auto<?php if ($cantidad > 1) { ?>s<?php } ?></h2>
                            <h2>Listado:</h2>
                            <?php
                            for ($i = 0; $i < $cantidad; $i++) {
                            ?>
                                <div class="card border-dark mb-3" style="max-width: 20rem;">
                                    <div class="card-header text-center">Marca: <?= $arregloAutos[$i]['Marca'] ?></div>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li>Modelo: <?= $arregloAutos[$i]['Modelo'] ?></li>
                                            <li>Patente: <?= $arregloAutos[$i]['Patente'] ?></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <h2>No se encontraron autos registrados con el DNI <?= $datosForm['dni'] ?></h2>
                        <?php
                        }
                    } else {
                        ?>
                        <h2><?= $error ?>.</h2>
                    <?php
                    }
                    ?>
                    <a href="listaPersonas.php"><input type="button" value="Volver" class="btn btn-dark mb-5"></a>
                </div>
            </div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>
</html>