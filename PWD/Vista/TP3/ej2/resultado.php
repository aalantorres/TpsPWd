<?php
include_once "../../../Control/TP3/ej2.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new archivosEj2;
$resultado = $objControlador->subirArchivos($_FILES);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TXT PLANO</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include '../../estructura/header.php'; ?>
    <h2><?= $resultado ?> </h2>
    <?php include '../../estructura/footer.php'; ?>

</body>

</html>