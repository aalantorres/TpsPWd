<?php
class saludoEj4
{
   public function saludar($metodo)
   {
      $mensaje = "";
      $nombre = $metodo["nombre"];
      $apellido = $metodo["apellido"];
      $edad = $metodo["edad"];
      $direccion = $metodo["direccion"];
      if ($nombre != null && $apellido != null && $edad  != null && $direccion != null) {
         if (!is_numeric($nombre) && !is_numeric($apellido)) {
            $mensaje = ($edad >= 18) ? "Sos mayor de edad" : "Sos menor de edad";
         } else {
            $mensaje = "Ingrese correctamente su nombre y apellido";
         }
      } else {
         $mensaje = "Los datos estan incompletos";
      }
      return $mensaje;
   }
}

