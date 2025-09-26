<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <form action="./resultado.php" method="post" id="formulario">
        <input type="text" name="num1" id="num1">
        <input type="text" name="num2" id="num2">
        <select name="operacion" id="">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select>
        <input type="submit">
    </form>





    <?php include '../../estructura/footer.php'; ?>
</body>

</html>