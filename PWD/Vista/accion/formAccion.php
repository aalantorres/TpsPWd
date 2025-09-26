<?php
require_once("../../Utils/herramienta.php");
$dirControlador = __DIR__ . "/../../Control/";

$data = datos_subidos();
$nombreControlador = $data['controller'] ?? null;
$accion = $data['action'] ?? null;

if ($nombreControlador && $accion) {
    $archControlador = $dirControlador . $nombreControlador . ".php";
    if (file_exists($archControlador)) {
        require_once $archControlador;

        if (class_exists($nombreControlador)) {
            $controller = new $nombreControlador();

            if (method_exists($controller, $accion)) {
                $resultado = $controller->$accion($data);
                include_once("../TP1/ej1/resultado.php");
            } else {
                echo "$accion no existe en $nombreControlador.";
            }
        } else {
            echo "No existe la clase $nombreControlador.";
        }
    } else {
        echo "No se encontró el archivo $archControlador.";
    }
} else {
    echo "No se recibió controlador ni accion.";
}