<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../../estructura/header.php') ?>

    <body>
        <div class="form-container w-50 mx-auto">
    <h2 class="text-center mb-4">Cambio de Dueño</h2>
    <form action="./accionCambioDuenio.php" method="POST" id="formulario" novalidate>
        <input type="hidden" name="action" value="cambiarDuenio">

        <div class="mb-3">
            <label for="dominio" class="form-label">Patente del auto:</label>
            <input type="text" name="dominio" id="dominio" maxlength="10" placeholder="Ej: ABC123" class="form-control" required>
            <div class="invalid-feedback">
                Patente no válida. Debe ser AAA123 o AAA1234.
            </div>
        </div>

        <div class="mb-3">
            <label for="dni" class="form-label">DNI del nuevo dueño:</label>
            <input type="text" name="dni" id="dni" placeholder="Ej: 12345678" class="form-control" required>
            <div class="invalid-feedback">
                DNI no válido. Debe tener 7 u 8 dígitos numéricos.
            </div>
        </div>

        <button type="submit" class="btn btn-dark w-100">Cambiar dueño</button>
    </form>
</div>
    </body>

   <script src="../../JS/patenteydni.js"></script>


    <?php include_once('../../estructura/footer.php'); ?>
</body>

</html>