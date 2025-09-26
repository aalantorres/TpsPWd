 <?php
    include_once('../../../Utils/herramienta.php');
    $datosForm = datos_subidos();
    include_once('../../../control/tp4/controlPersona.php');
    $busca = buscarPersona($datosForm['dni']);
    $existe = $busca['encuentra'];
    $persona = $busca['persona'];
    ?>
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
             <div class="container text-center d-flex justify-content-center flex-column">
                 <?php
                    if (!$existe) { ?>
                     <h1>Crear persona con DNI <?= $datosForm['dni'] ?>:</h1>
                     <div class="group-row">
                         <form class="container mt-4 p-4 border rounded shadow-sm w-50" action="accionCrearPersona.php" method="post">
                             <input type="hidden" name="dni" value="<?= $datosForm['dni'] ?>">

                             <h4 class="mb-4">Crear Persona</h4>

                             <div class="row mb-3">
                                 <div class="col-md-6 ">
                                     <label for="nombre" class="form-label">Nombre</label>
                                     <input type="text" name="nombre" id="nombre" class="form-control" required>
                                 </div>
                                 <div class="col-md-6 ">
                                     <label for="apellido" class="form-label">Apellido</label>
                                     <input type="text" name="apellido" id="apellido" class="form-control" required>
                                 </div>
                             </div>

                             <div class="row mb-3">
                                 <div class="col-md-6 ">
                                     <label for="telefono" class="form-label">Teléfono</label>
                                     <input type="text" name="telefono" id="telefono" class="form-control" required>
                                 </div>
                                 <div class="col-md-6">
                                     <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                                     <input type="date" name="fechaNac" id="fechaNac" class="form-control w-50 mx-auto" required>
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="domicilio" class="form-label">Domicilio</label>
                                 <input type="text" name="domicilio" id="domicilio" class="form-control" required>
                             </div>

                             <button type="submit" class="btn btn-dark">Crear</button>
                         </form>
                     </div>
                 <?php } else {
                        $nombre = $persona->getNombre();
                        $apellido = $persona->getApellido();
                        $dni = $persona->getNroDni();
                        $nacimiento = $persona->getFechaNac();
                        $telefono = $persona->getTelefono();
                        $domicilio = $persona->getDomicilio();
                        $anio = substr($nacimiento, 0, 4);
                        $mes = substr($nacimiento, 5, 2);
                        $dia = substr($nacimiento, 8, 2);
                    ?>
                     <h2>La persona ya existe en la base de datos:</h2>
                     <ul>
                         <li>Nombre: <?= $nombre ?></li>
                         <li>Apellido: <?= $apellido ?></li>
                         <li>Dni N°: <?= $dni ?></li>
                         <li>Fecha de nacimiento: <?= $dia ?>/<?= $mes ?>/<?= $anio ?></li>
                         <li>Telefono: <?= $telefono ?></li>
                         <li>Domicilio: <?= $domicilio ?></li>
                     </ul>
                     <a href="nuevaPersona.php"><input type="button" value="Volver"></a>
                 <?php } ?>
             </div>
         </main>
         <?php
            include_once('../../estructura/footer.php');
            ?>
     </body>

 </html>