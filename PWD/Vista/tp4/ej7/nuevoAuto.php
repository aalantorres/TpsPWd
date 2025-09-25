
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
        <div class="container w-50 text-center">
            <h1>Ingresar nuevo auto</h1>
                <form class="formulario  d-flex flex-column " action="preCrearAuto.php" method="post">
                    <label for="dominio">Ingrese patente:
                        <input type="text" placeholder="AAA 123" minlength="6" maxlength="7" name="dominio" id="dominio" required>
                    </label>
                    <label for="dni">Ingrese DNI del titular:
                        <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" required>
                    </label>
                        <input type="submit" value="Crear" class="btn btn-dark w-25 mx-auto">
                </form>
        </div>
        <script src="../../JS/patente.js"></script>
    </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>