<?php
class verificaPass {
    public function verifContra($metodo){
        $resultado = "";
        $user = array(
            "usuario" => "Alan",
            "clave" => "contrasenia"
        );
        $usuario = $metodo['usuario'];
        $clave = $metodo['clave'];
        if($usuario != null && $clave != null){
            if($usuario == $user['usuario'] && $clave == $user['clave']){
                $resultado = "Correcto";
            } else {
                $resultado = "Incorrecto";   
            }
        } else {
            $resultado = "noData";
        }
        return $resultado;
    } 
}