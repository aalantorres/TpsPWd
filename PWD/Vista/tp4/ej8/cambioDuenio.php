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
        <div class="form-container">
            <h2>Cambio de Dueño</h2>
            <form action="./accionCambioDuenio.php" method="POST" id="formulario">
                <input type="hidden" name="action" value="cambiarDuenio">

                <label for="dominio">Patente del auto:</label>
                <input type="text" name="dominio" id="dominio" maxlength="10" placeholder="Ej: ABC123" required>

                <label for="dni">DNI del nuevo dueño:</label>
                <input type="number" name="dni" id="dni" placeholder="Ej: 12345678" required>

                <input type="submit" value="Cambiar dueño">
            </form>
        </div>
    </body>

   <script src="../../JS/patenteydni.js"></script>


    <?php include_once('../../estructura/footer.php'); ?>
</body>

</html>