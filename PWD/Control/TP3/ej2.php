<?php
class archivosEj2
{

    public function subirArchivos($metodo)
    {

        $mensaje = "";
        $dir = "../ej1/Archivos/";
        if(isset($metodo["archivo"])){
          if ($metodo["archivo"]["error"] <= 0) {
            $tipo = $metodo["archivo"]["type"];
            //verifica que el archivo sea tipo texto
            if ((str_contains($tipo, "text/plain"))) {
                if (!copy($metodo['archivo']['tmp_name'], $dir . "/" . $metodo['archivo']['name'])) {
                    $mensaje = "ERROR: no se pudo cargar el archivo ";
                } else {
                    $mensaje =  "El archivo ' " . $metodo["archivo"]["name"] . " ' se ha copiado con Éxito <br />";
                    $textoArchivo =  file_get_contents($dir . "/" . $metodo["archivo"]["name"]);
                    $mensaje .= '<textarea name="textarea_datosingresados" id="textarea_datosingresados" disabled cols="50" rows="10">' . $textoArchivo . '</textarea>';
                }
            } else {
                $mensaje = "Solo se pueden subir archivos de tipo TXT";
            }
        } else {
            $mensaje = "ERROR: No se pudo cargar el archivos";
        }  
        } else {
            $mensaje = "No se subieron archivos";
        }
        
        return $mensaje;
    }
}