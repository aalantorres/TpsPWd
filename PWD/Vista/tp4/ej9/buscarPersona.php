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
    <div class="container">
        <h2>Buscar Persona</h2>
        <form action="accionBuscarPersona.php" method="post" id="formulario">
            <label for="dni">Número de Documento (DNI):</label>
            <input type="text" id="dni" name="dni" placeholder="Ingrese el DNI" min="0" max="99999999">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
    </div>
    <?php include("../../estructura/footer.php")?>
    <script src="../../JS/dni.js"></script>
    
</body>
</html>