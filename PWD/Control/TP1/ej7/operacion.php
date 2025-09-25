<?php
class operacion
{
    public function calcular($metodo)
    {
        $resultado = "";
        if ($metodo['num1'] != null && $metodo['num2'] != null) {
            if ($metodo['operacion'] == "suma") {
                $operacion = $metodo['num1'] + $metodo['num2'];
                $resultado = "El resultado de la suma es: $operacion";
            } elseif ($metodo['operacion'] == "resta") {
                $operacion = $metodo['num1'] - $metodo['num2'];
                $resultado = "El resultado de la resta es: $operacion";
            } else {
                $operacion = $metodo['num1'] * $metodo['num2'];
                $resultado = "El resultado de la multiplicacion es: $operacion";
            }
        } else {
            $resultado = "Faltan Ingresar datos";
        }

        return $resultado;
    }
}
