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
    <?php include("../../estructura/header.php")?>
    <div class="container w-50 mx-auto mt-4">
    <h2 class="text-center mb-4">Buscar Persona</h2>
    <form action="accionBuscarPersona.php" method="post" id="formulario" novalidate>
        <div class="mb-3">
            <label for="dni" class="form-label">Número de Documento (DNI):</label>
            <input type="text" id="dni" name="dni" placeholder="Ingrese el DNI" class="form-control" required>
            <div class="invalid-feedback">
                DNI no válido. Debe tener 7 u 8 dígitos numéricos.
            </div>
        </div>
        <button type="submit" class="btn btn-dark w-100">Buscar</button>
    </form>
</div>
    <?php include("../../estructura/footer.php")?>
    <script src="../../JS/dni.js"></script>
    
</body>
</html>