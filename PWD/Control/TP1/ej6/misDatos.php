<?php
class saludoEj6{
    public function saludar ($metodo){
        $mensaje = "";
        $nombre = $metodo["nombre"];
        $apellido = $metodo["apellido"];
        $edad = $metodo["edad"];
        $direccion = $metodo["direccion"];
        $sexo = $metodo["sexo"];
        $estudios = $metodo["estudios"];  
        if(isset($metodo["deporte"])){
            $cantDeportes = count($metodo["deporte"]);
        } else {
            $cantDeportes = 0;
        }
        if($nombre != null && $apellido != null && $edad  != null && $direccion != null && $sexo != null && $estudios != null){
            $mensaje = "Hola, $nombre $apellido de $edad años y residente en $direccion de sexo $sexo con estudios $estudios y practica $cantDeportes deportes";
        }else{ 
            $mensaje = "Los datos estan incompletos";
        }
        return $mensaje;
        
    }   

}

?>