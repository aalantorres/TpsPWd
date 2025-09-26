<?php
include_once('../../../control/tp4/controlPersona.php');
$arregloPersonas = verPersonas();
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
            <div class="container w-50">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <?php
                    $cantidad = count($arregloPersonas);
                    if ($cantidad > 0) {
                        $i = 0;
                    ?>
                        <h1>Hemos encontrado <?= $cantidad ?> personas.</h1>
                        <h2>Listado:</h2>
                        <?php
                        foreach ($arregloPersonas as $unaPersona) {
                            $i++;
                            $nombre = $unaPersona->getNombre();
                            $apellido = $unaPersona->getApellido();
                            $dni = $unaPersona->getNroDni();
                            $nacimiento = $unaPersona->getFechaNac();
                            $telefono = $unaPersona->getTelefono();
                            $domicilio = $unaPersona->getDomicilio();
                            $anio = substr($nacimiento, 0, 4);
                            $mes = substr($nacimiento, 5, 2);
                            $dia = substr($nacimiento, 8, 2);
                        ?>
                        <div class="card border-black mb-3" style="max-width: 18rem;">
                            <div class="card-header">Persona Nº: <?= $i ?></div>
                            <div class="card-body">
                            <p class="card-text"><ul>
                                <li>Nombre: <?= $nombre ?></li>
                                <li>Apellido: <?= $apellido ?></li>
                                <li>Dni N°: <?= $dni ?></li>
                                <li>Fecha de nacimiento: <?= $dia ?>/<?= $mes ?>/<?= $anio ?></li>
                                <li>Telefono: <?= $telefono ?></li>
                                <li>Domicilio: <?= $domicilio ?></li>
                            </ul></p>
                            </div>
                        </div>
                    <?php
                        }
                    } else {
                        echo "No se encontraron registros.";
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