
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
        <div class="contenedor">
            <h1 class="text-center">Base de datos de personas</h1>
            <div class="dos-opciones">
                <div class="container w-25 mt-5 text-center">
                    <h2>Listado completo</h2>
                    <img id="persona" src="../../img/persona.png" alt="Auto" class="w-50">
                    <a href="listado.php"><input type="button" value="Consultar" class="btn btn-dark"></a>
                </div>
                <div class="container w-25 text-center">
                    <h2>Buscar persona</h2>
                    <img id="auto-persona" src="../../img/auto-persona.png" alt="Auto-Persona" class="w-50">
                    <a href="autoPersona.php"><input type="button" value="Consultar" class="btn btn-dark"></a>
                </div>
            </div>
        </div>
    </main>
        <?php
        include_once('../../estructura/footer.php');
        ?>
    </body>

</html>