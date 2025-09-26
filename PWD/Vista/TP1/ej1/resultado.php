<?php
include_once "../../../Control/TP1/ej1/verNumero.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new verNumero;
$numero = $objControlador->verNumero($metodo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Numero</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <h2><?= $numero ?></h2>
    <a href="./formulario.php">Volver al formulario</a>
    <?php include '../../estructura/footer.php'; ?>

</body>

</html>