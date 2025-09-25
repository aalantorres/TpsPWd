<?php
include_once "../../../Control/TP1/ej8/precioEntrada.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new cine;
$resultado = $objControlador->calcEntrada($metodo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio Entrada</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <h2><?= $resultado ?></h2>

    <a href="./formulario.php">Volver</a>
</body>
<?php include '../../estructura/footer.php'; ?>

</html>