<?php
include_once "../../../Control/TP2/ejercicio4/subirPelicula.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new subirPelicula;
$resultado = $objControlador->subPelicula($metodo);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacion de pelicula</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../Utils/estilos.css">

</head>

<body>
  <?php include '../../estructura/header.php'; ?>
  <div class="p-4">
    <div class="alert alert-success" role="alert">

      <h2><?= $resultado ?> </h2>
    </div>
  </div>
  <?php include '../../estructura/footer.php'; ?>
</body>

</html>