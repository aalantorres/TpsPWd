<?php
class saludoEj5
{
   public function saludar($metodo)
   {
      $mensaje = "";
      $nombre = $metodo["nombre"];
      $apellido = $metodo["apellido"];
      $edad = $metodo["edad"];
      $direccion = $metodo["direccion"];
      $sexo = $metodo["sexo"];
      $estudios = $metodo["estudios"];
      if ($nombre != null && $apellido != null && $edad  != null && $direccion != null && $sexo != null && $estudios != null) {
         if (!is_numeric($nombre) && !is_numeric($apellido)) {
            $mensaje = "Hola, $nombre $apellido de $edad años y residente en $direccion de sexo $sexo con estudios $estudios";
         } else {
            $mensaje = "Ingrese correctamente su nombre y apellido";
         }
      } else {
         $mensaje = "Los datos estan incompletos";
      }
      return $mensaje;
   }
}
