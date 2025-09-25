<?php
include_once(__DIR__ . '/../../modelo/tp4/Auto.php');
include_once(__DIR__ . '/../../modelo/tp4/Persona.php');
include_once('controlAuto.php');

function verPersonas()
{
    $objPersona = new Persona();
    $respuesta = $objPersona->listar();
    return $respuesta;
}

function buscarPersona($dni)
{
    $error = "";
    $objPersona = new Persona();
    $encuentra = false;

    // Validar que sea numérico y de 7 u 8 dígitos
    if (preg_match('/^\d{7,8}$/', $dni)) {
        $encuentra = $objPersona->buscar($dni);
        if (!$encuentra) {
            $error = "No se encontro ninguna persona con ese DNI.";
        }
    } else {
        $error = "DNI debe contener 7 u 8 digitos numericos";
    }

    $respuesta = [
        'encuentra' => $encuentra,
        'persona'   => $objPersona,
        'error'     => $error
    ];

    return $respuesta;
}

function buscarAutoPersona($dni)
{
    $error = "";
    $arregloAuto = [];
    $buscar = buscarPersona($dni);
    $encuentra = $buscar['encuentra'];
    $objPersona = $buscar['persona'];
    if ($encuentra) {
        $consulta = "SELECT Patente, Marca, Modelo FROM auto WHERE DniDuenio='$dni';";
        $base = new BaseDatos();
        $respuesta = false;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($consulta)) {
                $row = $base->Registro();
                if ($row) {
                    do {
                        $unAuto = [
                            "Patente" => $row['Patente'],
                            "Marca" => $row['Marca'],
                            "Modelo" => $row['Modelo']
                        ];
                        array_push($arregloAuto, $unAuto);
                    } while ($row = $base->Registro());
                }
            }
        }
    } else {
        $error = "Persona no encontrada";
    }
    $respuesta = [
        "encuentra" => $encuentra,
        "arreglo" => $arregloAuto,
        "persona" => $objPersona,
        "error" => $error
    ];
    return $respuesta;
}

function insertarPersona($datos)
{
    $dni = $datos['dni'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $domicilio = $datos['domicilio'];
    $telefono = $datos['telefono'];
    $fechaNac = $datos['fechaNac'];
    $error = "";

    if (!preg_match('/^\d{7,8}$/', $dni)) {
        $error = "DNI no válido. Debe tener 7 u 8 dígitos numéricos.";
        return ["inserta" => false, "error" => $error];
    }

    if (empty($nombre) || !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre)) {
        $error = "Inserte un nombre valido";
        return ["inserta" => false, "error" => $error];
    }

    if (empty($apellido) || !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $apellido)) {
        $error = "Inserte un apellido valido";
        return ["inserta" => false, "error" => $error];
    }


    $objPersona = new Persona();
    $objPersona->cargar($nombre, $apellido, $telefono, $fechaNac, $dni, $domicilio);
    $inserta = $objPersona->insertar();

    if (!$inserta) {
        $error = "No se pudo añadir al usuario";
    }

    return [
        "inserta" => $inserta,
        "error" => $error
    ];
}
