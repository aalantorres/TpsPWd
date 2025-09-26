<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/header.php'
    ?>
    <main>
        <div class="card  w-25 p-4 text-center mx-auto mt-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-title">Base de datos de vehículos</h1>
            <img id="auto" src="../../img/auto.png" alt="Auto" class="my-3 imagen">
            <a href="listado.php"><input type="button" value="Consultar" class="btn btn-dark "></a>
            </div>
            </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 
</body>
</html>