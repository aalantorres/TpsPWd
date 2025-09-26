<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir archivo</title>
    <link rel="stylesheet" href="../../../Utils/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../../estructura/header.php'; ?>
    <div class="p-4">
        <h2>Subir archivo (2MB)</h2>
        <form action="./resultado.php" method="post" enctype="multipart/form-data">

            <input type="file" name="archivo" required>
            <br><br>
            <input type="submit" value="Subir">
    </div>
    </form>
    <?php include '../../estructura/footer.php'; ?>
</body>