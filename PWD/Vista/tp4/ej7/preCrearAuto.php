 <?php
    include_once('../../../Utils/herramienta.php');
    $datosForm = datos_subidos();
    include_once('../../../control/tp4/controlAuto.php');
    $buscaAuto = consultaPatente($datosForm['dominio']);
    $existeAuto = $buscaAuto['encuentra'];
    $objAuto = $buscaAuto['objeto'];
    $errorAuto = $buscaAuto['error'];
    include_once('../../../control/tp4/controlPersona.php');
    $buscaPersona = buscarPersona($datosForm['dni']);
    $existePersona = $buscaPersona['encuentra'];
    $objPersona = $buscaPersona['persona'];
    $nombre = $objPersona->getNombre();
    $apellido = $objPersona->getApellido();
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
     <?php
        include_once '../../estructura/header.php';
        ?>
     <main>
         <div class="contenedor">
             <?php
                if (!$existeAuto && $existePersona) {
                ?>
                 <h1>Dueño:</h1>
                 <ul>
                     <li>Nombre: <?= $nombre ?></li>
                     <li>Apellido: <?= $apellido ?></li>
                     <li>DNI: <?= $datosForm['dni'] ?></li>
                 </ul>
                 <h1>Crear vehiculo con Patente <?= $datosForm['dominio'] ?>:</h1>
                 <div class="group-row">
                     <form class="formulario" action="accionCrearAuto.php" method="post">
                         <input type="hidden" name="dni" value="<?= $datosForm['dni'] ?>">
                         <input type="hidden" name="dominio" value="<?= $datosForm['dominio'] ?>">
                         <div class="divDatos">
                             <div class="pares">
                                 <label for="marca">Marca:
                                     <input type="text" name="marca" id="marca" required>
                                 </label>
                                 <label for="modelo">Modelo:
                                     <input type="text" name="modelo" id="modelo" required>
                                 </label>
                             </div>
                             <input type="submit" value="Crear" class="btn btn-dark">
                         </div>
                     </form>
                 </div>
             <?php }
                if ($existeAuto) {
                    $patente = $objAuto->getPatente();
                    $marca = $objAuto->getMarca();
                    $modelo = $objAuto->getModelo();
                    $objPersonaDuenio = $objAuto->getObjPersona();
                    $nombreDuenio = $objPersonaDuenio->getNombre();
                    $apellidoDuenio = $objPersonaDuenio->getApellido();
                    $dniDuenio = $objPersonaDuenio->getNroDni();
                ?>
                 <h2>El auto ya existe en la base de datos:</h2>
                 <ul>
                     <li>Patente: <?= $patente ?></li>
                     <li>Marca: <?= $marca ?></li>
                     <li>Modelo: <?= $modelo ?></li>
                     <li>Datos del dueño:</li>
                     <li>Nombre: <?= $nombreDuenio ?></li>
                     <li>Apellido: <?= $apellidoDuenio ?></li>
                     <li>Dni N°: <?= $dniDuenio ?></li>
                 </ul>
                 <a href="nuevoAuto.php"><input type="button" value="Volver" class="btn btn-dark"></a>
             <?php }
                if (!$existePersona) {
                ?>
                 <h2>No existe la persona con DNI: <?= $datosForm['dni'] ?>.</h2>
                 <div>
                     <a href="nuevoAuto.php"><input type="button" value="Volver" class="btn btn-dark"></a>
                     <a href="../ej6/nuevaPersona.php"><input type="button" value="Crear" class="btn btn-dark"></a>
                 </div>
             <?php } ?>
         </div>
     </main>
     <?php
        include_once('../../estructura/footer.php');
        ?>
 </body>

 </html>