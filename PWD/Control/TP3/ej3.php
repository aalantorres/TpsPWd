<?php
class cineTP3{
    public function subirPelicula($metodo, $archivo){
        $datosPelicula = '<h3 class="text-primary"> La pelicula introducida es </h3>';
    $datosPelicula .= '<p><strong>Titulo: </strong>' . $metodo['titulo'] . '</p>';
    $datosPelicula .= '<p><strong>actores: </strong>' . $metodo['actores'] . '</p>';
    $datosPelicula .= '<p><strong>director: </strong>' . $metodo['director'] . '</p>';
    $datosPelicula .= '<p><strong>guion: </strong>' . $metodo['guion'] . '</p>';
    $datosPelicula .= '<p><strong>produccion: </strong>' . $metodo['produccion'] . '</p>';
    $datosPelicula .= '<p><strong>anio: </strong>' . $metodo['anio'] . '</p>';
    $datosPelicula .= '<p><strong>nacionalidad: </strong>' . $metodo['nacionalidad'] . '</p>';
    $datosPelicula .= '<p><strong>duracion: </strong>' . $metodo['duracion'] . '</p>';
    $datosPelicula .= '<p><strong>edad: </strong>' . $metodo['edad'] . '</p>';
    $datosPelicula .= '<p><strong>sinopsis: </strong>' . $metodo['sinopsis'] . '</p>';
    $dir = "../ej1/Archivos/";
    $nombre   = basename($archivo["archivo"]["name"]);
    $rutaWeb = "../ej1/Archivos/" . $nombre;
    if ($archivo["archivo"]["error"] <= 0) {
        $nombre = $archivo["archivo"]["name"];
        $tipo = $archivo["archivo"]["type"];
        //verifica que sea imagen
        if ((str_contains($tipo, "jpg") || str_contains($tipo, "png"))) {

            if (!copy($archivo['archivo']['tmp_name'], $dir . $archivo['archivo']['name'])) {
                $datosPelicula .= "ERROR: no se pudo cargar el archivo ";
            } else {
                $datosPelicula .= '<p><strong>Imagen: </strong><br><img src="' . $rutaWeb . '" alt="Imagen subida" width="500"></p>';
            }
        }
    }
    return $datosPelicula;
    }

}
