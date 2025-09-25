<?php
include_once "../../../../Control/TP2/ejercicio1/ej2/horaCursadas.php";
include_once "../../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new horas;
$resultado = $objControlador->horasCursadas($metodo);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de cursadas</title>
    <link rel="stylesheet" href="./estilos.css">
        <link rel="stylesheet" href="../../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../../estructura/header.php'; ?>
    <div class="horarios">
        <h1>Las Horas de cursadas</h1>
        <h2>Se cursan: <?=$resultado?> horas semanales</h2>
    </div>
        <?php include '../../../estructura/footer.php'; ?>
</body>

</html>