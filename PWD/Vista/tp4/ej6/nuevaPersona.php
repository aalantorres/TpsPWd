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
        <div class="container d-flex flex-column align-items-center w-25 text-center p-4">
    <h1>Crear persona</h1>
    
    <form action="preCrearPersona.php" method="post" id="formulario" class="w-100" novalidate>
        <div class="mb-3 d-flex flex-column align-items-center">
            <label for="dni" class="form-label">Ingrese DNI:</label>
            <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" class="form-control w-50" required>
            <div class="invalid-feedback">
                DNI no válido. Debe tener 7 u 8 dígitos numéricos.
            </div>
        </div>
        <input type="submit" value="Crear" class="btn btn-dark">
    </form>
</div>
    </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
        <script src="../../JS/dni.js"></script>
    </body>

</html>