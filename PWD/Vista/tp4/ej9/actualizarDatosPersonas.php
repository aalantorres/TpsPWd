<?php
include_once('../../../Utils/herramienta.php');
include_once('../../../control/tp4/controlPersona.php');
$datosForm = datos_subidos();
$dni = $datosForm['dni'] ?? '';
$nombre = $datosForm['nombre'] ?? '';
$apellido = $datosForm['apellido'] ?? '';
$telefono = $datosForm['telefono'] ?? '';
$domicilio = $datosForm['domicilio'] ?? '';
$fechaNac = $datosForm['fechaNac'] ?? '';
$objPersona = new Persona();
$objPersona->cargar($nombre, $apellido, $telefono, $fechaNac, $dni, $domicilio);
$actualiza = $objPersona->modificar();
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
        <?php if ($actualiza): ?>
            <p class="success">Los datos de la persona con DNI <?= $dni; ?> se actualizaron correctamente.</p>
        <?php else: ?>
            <p class="error">Ocurrió un error al actualizar los datos de la persona. Verifique la información e intente nuevamente.</p>
        <?php endif; ?>
        <a href="buscarPersona.php">Volver a buscar persona</a>
    </div>
     <?php include("../../estructura/footer.php")?>
</body>

</html>