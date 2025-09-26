<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 TP 1</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<?php include '../../estructura/header.php'; ?>
<body>
    <form action="./resultado.php" method="post">
        <h1>Ingrese un numero</h1>
        <input type="number" name="numero" id="numero" required>
        <input type="submit">
    </form>
<?php include '../../estructura/footer.php'; ?>
</body>

</html>