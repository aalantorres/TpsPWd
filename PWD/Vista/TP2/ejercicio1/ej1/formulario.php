<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../Utils/estilos.css">
</head>

<body>
<?php include '../../../estructura/header.php'; ?>

    <form action="./resultado.php" method="post" class="needs-validation" novalidate>
        <h1>Ingrese un numero</h1>
        <div class="mb-3">
            <input type="number" name="numero" id="numero" class="form-control w-25" required>
        </div>
        <input type="submit" class="btn btn-dark">

    </form>
    <script src="./public/js/script.js">

    </script>
    <?php include '../../../estructura/footer.php'; ?>
</body>

</html>