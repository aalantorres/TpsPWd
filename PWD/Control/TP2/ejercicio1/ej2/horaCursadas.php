<?php
class horas
{
    public function horasCursadas($metodo)
    {
        $verificacion = true;
        $dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
        foreach ($dias as $dia) {
            if (!isset($metodo[$dia]) || !is_numeric($metodo[$dia])) {
                $verificacion = false;
            }
        }

        if ($verificacion) {
            $horas = array_sum([
                $metodo["lunes"],
                $metodo["martes"],
                $metodo["miercoles"],
                $metodo["jueves"],
                $metodo["viernes"]
            ]);
            $mensaje = $horas;
        } else {
            $mensaje = "Verifique los datos ingresados";
        }
        return $mensaje;
    }
}