<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./Utils/estilos.css">
</head>

<body>
  <?php include __DIR__ . "/Vista/estructura/header.php"; ?>
  <div class="my-3 p-3 mb-2 bg-dark text-white">
    <h1 class="text-center">TRABAJOS PRACTICOS</h1>
  </div>
  <div class="card w-50 mt-3 mx-auto bg-light">
    <div class="card-body mx-auto">
      <h5 class="card-title text-center">TRABAJO PRACTICO N°1</h5>
      <p class="card-text">Acá encontrarás todos los ejercicios del trabajo practico numero 1</p>
      <a href="./Vista/TP1/index.php" class="btn btn-dark d-block mx-auto" style="width:max-content">Acceder</a>
    </div>
  </div>

  <div class="card w-50 mt-3 mx-auto bg-light">
    <div class="card-body mx-auto">
      <h5 class="card-title text-center">TRABAJO PRACTICO N°2</h5>
      <p class="card-text">Acá encontrarás todos los ejercicios del trabajo practico numero 2</p>
      <a href="./Vista/TP2/index.php" class="btn btn-dark d-block mx-auto" style="width:max-content">Acceder</a>
    </div>
  </div>

  <div class="card w-50 mt-3 mx-auto bg-light">
    <div class="card-body mx-auto">
      <h5 class="card-title text-center">TRABAJO PRACTICO N°3</h5>
      <p class="card-text">Acá encontrarás todos los ejercicios del trabajo practico numero 3</p>
      <a href="./Vista/TP3/index.php" class="btn btn-dark d-block mx-auto" style="width:max-content">Acceder</a>
    </div>
  </div>

  <div class="card w-50 mt-3 mx-auto bg-light">
    <div class="card-body mx-auto">
      <h5 class="card-title text-center">TRABAJO PRACTICO N°4</h5>
      <p class="card-text">Acá encontrarás todos los ejercicios del trabajo practico numero 4</p>
      <a href="./Vista/tp4/index.php" class="btn btn-dark d-block mx-auto" style="width:max-content">Acceder</a>
    </div>
  </div>

  <div class="my-3 p-3 mb-2 bg-dark text-white">
    <h2 class="text-center">INTEGRANTES</h1>
  </div>

  <div id="carousel-integrantes" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="d-flex justify-content-center align-items-center" style="height:200px;">
        <h2>Alan Torres</h2>
      </div>
    </div>

    <div class="carousel-item">
      <div class="d-flex justify-content-center align-items-center" style="height:200px;">
        <h2>Rodrigo Almonacid</h2>
      </div>
    </div>

    <div class="carousel-item">
      <div class="d-flex justify-content-center align-items-center" style="height:200px;">
        <h2>Facundo Morales</h2>
      </div>
    </div>

  </div>
</div>
  <?php include __DIR__ . "/Vista/estructura/footer.php"; ?>
</body>

</html>