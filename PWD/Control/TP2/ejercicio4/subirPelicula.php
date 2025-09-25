<?php
class subirPelicula
{
    public function subPelicula($metodo)
    {
        $datosPelicula = '<h3 class="text-dark"> La pelicula introducida es </h3>';
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
        return $datosPelicula;
    }
}