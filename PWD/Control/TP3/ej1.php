<?php
class subArchivos
{
    public function subirArchivo($metodo)
    {
        $mensaje = "";

        $dir = "./Archivos/";
        if ($metodo["archivo"]["error"] <= 0) {
            $nombre = $metodo["archivo"]["name"];
            $tipo = $metodo["archivo"]["type"];
            $peso = $metodo["archivo"]["size"];
            //verifica el tipo de archivo
            if ((str_contains($tipo, "pdf") || str_contains($tipo, "doc"))) {
                //peso del archivo maximo
                if ($peso <= 2099000) {
                    if (!copy($metodo['archivo']['tmp_name'], $dir . $metodo['archivo']['name'])) {
                        $mensaje = "ERROR: no se pudo cargar el archivo ";
                    } else {
                        $mensaje = "El archivo " . $metodo["archivo"]["name"] . " se copio con Éxito <br />" . "<a href='./Archivos/$nombre'>Descargar Archivo</a>";
                    }
                } else {
                    $mensaje = "Porfavor ingrese un archivo de peso maximo 2 MB";
                }
            } else {
                $mensaje = "Solo se pueden subir archivos PDF o Documento!";
            }
        } else {
            $mensaje = "ERROR: No se pudo cargar el archivo a la base de datos";
        }
        return $mensaje;
    }
}
