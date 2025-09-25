<?php
include_once('../../../Utils/herramienta.php');
include_once('../../../control/tp4/controlPersona.php');

$datosForm = datos_subidos();
$dni = $datosForm['dni'] ?? '';
$buscaPersona = buscarPersona($dni);
$existePersona = $buscaPersona['encuentra'];
$objPersona = $buscaPersona['persona'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include("../../estructura/header.php") ?>
    <div class="container">
        <h2>Modificar Persona</h2>

        <?php if (!$existePersona): ?>
            <p class="error">La persona con DNI <?= $dni; ?> no se encuentra registrada.</p>
        <?php else: ?>
            <form action="actualizarDatosPersonas.php" method="post">
                <input type="hidden" name="dni" value="<?= $objPersona->getNroDni(); ?>" required>

                <label for="dni">DNI:</label>
                <input type="text" id="dni_mostrar" value="<?= $objPersona->getNroDni(); ?>" readonly>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= $objPersona->getNombre(); ?>" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?= $objPersona->getApellido(); ?>" required>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?= $objPersona->getTelefono(); ?>" required>

                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" name="domicilio" value="<?= $objPersona->getDomicilio(); ?>" required>

                <label for="fechaNac">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNac" name="fechaNac" value="<?= $objPersona->getFechaNac(); ?>" required>

                <div id="error" class="error"></div>
                <button type="submit">Actualizar Datos</button>
            </form>
            <script src="../../JS/validDatos.js"></script>
        <?php endif; ?>
    </div>
    <?php include("../../estructura/footer.php") ?>
</body>

</html>