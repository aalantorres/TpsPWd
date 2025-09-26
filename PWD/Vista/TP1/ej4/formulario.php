<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <form action="./resultado.php" method="get">
        <label for="nombre">Nombre: <input type="text" required name="nombre" id="nombre"></label>
        <label for="apellido">Apellido: <input type="text" required name="apellido" id="apellido"></label>
        <label for="edad">Edad: <input type="number" max="100" min="1" required name="edad" id="edad"></label>
        <label for="direccion">Direccion: <input type="text" required name="direccion" id="direccion"></label>
        <input type="submit" class="subir">
    </form>
    
<?php include '../../estructura/footer.php'; ?>
</body>

</html>