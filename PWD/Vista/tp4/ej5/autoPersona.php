<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Personas</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body>
        <?php
        include_once '../../estructura/header.php';
        ?>
        <main>
            <div class="container d-flex flex-column align-items-center w-50 text-center p-4">
    <h1>Buscar persona por DNI</h1>
    <img id="patente" src="../../img/dni.png" alt="DNI" class="mt-2 mb-2">

    <form action="accionBuscarPersona.php" method="get" id="formulario" class="w-100" novalidate>
        <div class="mb-3 d-flex flex-column align-items-center">
            <label for="dni" class="form-label">Ingrese DNI:</label>
            <input type="text" placeholder="11222333" maxlength="8" name="dni" id="dni" class="form-control w-25 text-center" required>
            <div class="invalid-feedback">
                DNI no válido. Debe tener 7 u 8 dígitos numéricos.
            </div>
        </div>
        <input type="submit" value="Consultar" class="btn btn-dark">
    </form>
</div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
        <script src="../../JS/dni.js"></script>
    </body>

</html>