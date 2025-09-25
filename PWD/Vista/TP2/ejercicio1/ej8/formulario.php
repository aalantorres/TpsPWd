<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../Utils/estilos.css">

</head>

<body>

    <?php include '../../../estructura/header.php'; ?>

    <h1>Cine Cinem@s</h1>
    <form class="needs-validation" method="post" id="formulario" action="./resultado.php" novalidate>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad: <input type="number" class="form-control" max="100" min="1" required name="edad" id="edad" step="1"></label>
        </div>
        <div class="mb-3">
            <p>seleccione si es estudiante</p>
            <label for="si" class="form-check-label"><input type="radio" class="form-check-input" name="estudiante" value="si" id="si" required>si</label>
            <label for="no" class="form-check-label"><input type="radio" class="form-check-input" name="estudiante" value="no" id="no" required>no</label>
        </div>
        <input type="submit" class="btn btn-primary">
        <input type="reset" class="btn btn-secondary">
    </form>
    <script src="./public/js/script.js">

    </script>
    <?php include '../../../estructura/footer.php'; ?>
</body>

</html>