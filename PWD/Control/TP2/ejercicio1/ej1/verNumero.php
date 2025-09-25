<?php
class verNumero {


public function verNumero($metodo)
{
    $numero = $metodo["numero"];
    if (isset($numero)) {
        if ($numero == 0) {
            $resultado = "El numero es cero";
        } else if ($numero > 0) {
            $resultado = "El numero es positivo";
        } else {
            $resultado = "El numero es negativo";
        }
    } else {
        $resultado = "No se recibio ningun numero";
    }
    return $resultado;
}
}
