<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 TP 3</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include '../../estructura/header.php'; ?>

<div class="p-4">
    <form action="./resultado.php" method="post" enctype="multipart/form-data">
        <label>Ingrese el archivo de tipo "txt plano"</label><br>
        <input name="archivo" class="mt-2" id="archivo" type="file"><br>
        <input type="submit" class="btn btn-dark mt-2" id="input_submit" name="input_submit">
    </form>
    </div>
    <?php include '../../estructura/footer.php'; ?>
</body>

</html>