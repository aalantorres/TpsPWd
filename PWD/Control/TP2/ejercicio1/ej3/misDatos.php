<?php
class saludoEj3
{
  public function saludar($metodo)
  {
    $saludo = "";
    $nombre = $metodo["nombre"];
    $apellido = $metodo["apellido"];
    $edad = $metodo["edad"];
    $direccion = $metodo["direccion"];
    //verifica que todos los datos esten llenados
    if ($nombre != null && $apellido != null && $edad  != null && $direccion != null) {
      //Se verifica que no se ingresen numeros en vez de letras en nombre y apellido
      if (!is_numeric($nombre) && !is_numeric($apellido)) {
        $saludo = "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion";
      } else {
        $saludo = "Ingrese correctamente su nombre y apellido";
      }
    } else {
      $saludo = "Los datos estan incompletos";
    }
    return $saludo;
    include_once("../../../Vista/TP1/ej3/resultado.php");
  }
}
