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
            <form action="actualizarDatosPersonas.php" method="post" id="formulario" novalidate>
                <input type="hidden" name="dni" value="<?= $objPersona->getNroDni(); ?>">

                <div class="mb-3">
                    <label for="dni_mostrar" class="form-label">DNI:</label>
                    <input type="text" id="dni_mostrar" value="<?= $objPersona->getNroDni(); ?>" readonly class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?= $objPersona->getNombre(); ?>" class="form-control" required>
                    <div class="invalid-feedback">Nombre inválido. Solo letras y espacios.</div>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="<?= $objPersona->getApellido(); ?>" class="form-control" required>
                    <div class="invalid-feedback">Apellido inválido. Solo letras y espacios.</div>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" value="<?= $objPersona->getTelefono(); ?>" class="form-control" required>
                    <div class="invalid-feedback">Teléfono inválido. Solo se permiten números y guiones.</div>
                </div>

                <div class="mb-3">
                    <label for="domicilio" class="form-label">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio" value="<?= $objPersona->getDomicilio(); ?>" class="form-control" required>
                    <div class="invalid-feedback">Debe ingresar un domicilio.</div>
                </div>

                <div class="mb-3">
                    <label for="fechaNac" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNac" name="fechaNac" value="<?= $objPersona->getFechaNac(); ?>" class="form-control" required>
                    <div class="invalid-feedback">Debe ingresar una fecha de nacimiento.</div>
                </div>

                <button type="submit" class="btn btn-dark">Actualizar Datos</button>
            </form>
            <script src="../../JS/validDatos.js"></script>
        <?php endif; ?>
    </div>
    <?php include("../../estructura/footer.php") ?>
</body>

</html>