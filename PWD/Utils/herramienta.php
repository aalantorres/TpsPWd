<?php 

/* Funcion que devuelve el metodo con el que se mando el formulario */
function datos_subidos(){
    $tipoMet = [];
    // empty devuelve false si tiene datos 
    if(!empty($_POST)){
        $tipoMet = $_POST;
    } elseif (!empty($_GET)){
        $tipoMet = $_GET;
    } else {
        $tipoMet = $_FILES;
    }

    //sanitizacion datos, si el valor esta vacio devuelve null, en numeros quita caracteres que no correspondan, y en strings convierte los caractees especiales en texto 
    foreach ($tipoMet as $key => $value) {
        if ($value === "") {
            $tipoMet[$key] = null;
        } elseif (is_array($value)) {

            $tipoMet[$key] = array_map(function($v){
                return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
            }, $value);
        } elseif (is_numeric($value)) {
            $tipoMet[$key] = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        } else {
            $tipoMet[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
    }
    return $tipoMet;
}