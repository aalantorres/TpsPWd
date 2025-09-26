
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
    <?php include_once('../../estructura/header.php')?>
   <main>
        <div class="container d-flex flex-column align-items-center w-50 text-center p-4">
    <h1>Ingresar nuevo auto</h1>
    <form action="preCrearAuto.php" method="post" id="formulario" class="w-100" novalidate>
        <div class="mb-3 d-flex flex-column align-items-center">
            <label for="dominio" class="form-label">Ingrese patente:</label>
            <input type="text" placeholder="AAA 123" minlength="6" maxlength="7" name="dominio" id="dominio" class="form-control w-50" required>
            <div class="invalid-feedback">
                Patente no válida (ej: AAA123, AAA-123, AAA 123).
            </div>
        </div>

        <div class="mb-3 d-flex flex-column align-items-center">
            <label for="dni" class="form-label">Ingrese DNI del titular:</label>
            <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" class="form-control w-50" required>
            <div class="invalid-feedback">
                DNI no válido. Debe tener 7 u 8 dígitos numéricos.
            </div>
        </div>

        <input type="submit" value="Crear" class="btn btn-dark w-25 mx-auto">
    </form>
</div>
        <script src="../../JS/patenteydni.js"></script>
    </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>