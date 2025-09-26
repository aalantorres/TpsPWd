<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../../Utils/estilos.css">
</head>

<body>
    <?php include '../../../estructura/header.php'; ?>
    <form action="./resultado.php" method="post" id="formulario" class="needs-validation p-4 m-5 border w-25" novalidate>
        <input type="text" name="num1" id="num1" class="form-control mb-3">
        <input type="text" name="num2" id="num2" class="form-control mb-3">
        <select name="operacion" id="" class="form-select mb-3">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select>
        <input type="submit" class="btn btn-dark">
    </form>





    <script src="./public/js/script.js">

    </script>
      <?php include '../../../estructura/footer.php'; ?>
</body>

</html>