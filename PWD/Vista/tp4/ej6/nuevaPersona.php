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
        <div class="container w-25 text-center">
            <h1>Crear persona</h1>
                <form class="formulario" action="preCrearPersona.php" method="post" id="formulario">
                    <label for="dni">Ingrese DNI:
                        <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" required>
                    </label>
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