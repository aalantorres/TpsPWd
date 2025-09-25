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
            <div class="container w-50 text-center p-4">
                <h1>Buscar persona por DNI</h1>
                <div class="group-row">
                    <img id="patente" src="../../img/dni.png" alt="DNI" class="mt-2 mb-2">
                    <form class="formulario" action="accionBuscarPersona.php" method="get" id="formulario">
                        <label for="dni">Ingrese DNI:
                            <input type="number" placeholder="11222333" maxlength="9" name="dni" id="dni" required>
                        </label>
                        <input type="submit" value="Consultar" class="btn btn-dark">
                    </form>
                </div>
            </div>
        </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
        <script src="../../JS/dni.js"></script>
    </body>

</html>