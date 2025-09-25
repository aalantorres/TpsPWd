<?php
include_once "../../../Control/TP1/ej3/misDatos.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new saludoEj3;
$resultado = $objControlador->saludar($metodo);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Datos </title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <div class="datos">
        <h2><?=$resultado?> </h2>
    </div>
    <?php include '../../estructura/footer.php'; ?>
</body>

</html>