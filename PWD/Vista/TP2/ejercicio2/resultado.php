<?php
include_once "../../../Control/TP2/ejercicio2/verificaPass.php";
include_once "../../../Utils/herramienta.php";
$metodo = datos_subidos();
$objControlador = new verificaPass;
$resultado = $objControlador->verifContra($metodo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado Login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../Utils/estilos.css">
</head>

<body>
  <?php include '../../estructura/header.php'; ?>

  <?php if ($resultado === "Correcto"): ?>
    <div class="container mt-5">
      <div class="alert alert-success" role="alert">
        <h2>¡Bienvenido!</h2>
      </div>
    </div>
    <?php elseif ($resultado === "Incorrecto"): ?>
      <div class="container mt-5">
        <div class="alert alert-warning" role="alert">
          <h2>¡Error de acceso!</h2>
        </div>
      </div>
    <?php else: ?>
      <div class="container mt-5">
        <div class="alert alert-warning" role="alert">
          <h2>¡No se ingresaron datos!</h2>
        </div>
      </div>
    <?php endif; ?>
    <?php include '../../estructura/footer.php'; ?>
</body>

</html>