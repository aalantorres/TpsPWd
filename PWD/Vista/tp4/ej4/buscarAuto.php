
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <body>
    <?php
    include_once '../../estructura/header.php';
    ?>
        <main>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1>Buscar auto por patente</h1>
            <div class="group-row">
                <img id="patente" src="../../img/patente.jpg" alt="Auto">
                <form class="formulario" action="accionBuscarAuto.php" method="get">
                    <label for="dominio" class="form-label">Ingrese patente:
                        <input type="text" placeholder="AAA 123" minlength="6" maxlength="7" name="dominio" id="dominio" required>
                    </label>
                    <input type="submit" value="Consultar" class="btn btn-dark">
                </form>
            </div>
        </div>
        <script src="../../JS/patente.js"></script>
    </main>
    <?php
    include_once('../../estructura/footer.php');
?> 
</body>
</html>