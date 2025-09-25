<?php
class cine
{
    public function calcEntrada($metodo)
    {
        $edad = $metodo["edad"];
        $esEstudiante = $metodo["estudiante"];
        $precio = 0;
        $mensaje = "";
        if ($edad != null && $esEstudiante != null) {

            if ($edad <= 12 || ($edad <= 12 && $esEstudiante == "si")) {
                $precio = 160;
            } else if ($edad >= 12 && $esEstudiante == "si") {
                $precio = 180;
            } else {
                $precio = 300;
            }

            $mensaje = "El precio de su entrada es de:$$precio";
        } else {
            $mensaje = "faltan datos por ingresar";
        }
        return $mensaje;
    }
}
    ?>