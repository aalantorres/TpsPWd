<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 </title>
    <link rel="stylesheet" href="../ej2/css/styles.css">
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <form action="./resultado.php" method="get">
        <label for="lunes">Lunes <input type="number" name="lunes" id="lunes" required min="0"></label>
        <label for="martes">Martes <input type="number" name="martes" id="martes" required min="0"></label>
        <label for="miercoles">Miercoles <input type="number" name="miercoles" id="miercoles" required min="0"></label>
        <label for="jueves">Jueves <input type="number" name="jueves" id="jueves" required min="0"></label>
        <label for="viernes">Viernes <input type="number" name="viernes" id="viernes" required min="0"></label>
        <input type="submit" class="boton">
    </form>
    <?php include '../../estructura/footer.php'; ?>
</body>

</html>