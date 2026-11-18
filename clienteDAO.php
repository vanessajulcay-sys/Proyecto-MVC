<?php
include_once("conexion.php");

function getClientes() {
    return [
        ['id' => 1, 'dni' => '72839401', 'apellidos' => 'Pérez Gómez', 'nombres' => 'Juan Carlos', 'email' => 'jperez@gmail.com', 'celular' => '987654321', 'direccion' => 'Av. Larco 123'],
        ['id' => 2, 'dni' => '45123890', 'apellidos' => 'Rodríguez Silva', 'nombres' => 'María Elena', 'email' => 'mrodriguez@hotmail.com', 'celular' => '912345678', 'direccion' => 'Calle Los Olivos 456']
    ];
}

function consultarCliente($id) {
    return ['id' => $id, 'dni' => '72839401', 'apellidos' => 'Pérez Gómez', 'nombres' => 'Juan Carlos', 'email' => 'jperez@gmail.com', 'celular' => '987654321', 'direccion' => 'Av. Larco 123'];
}

function insertarCliente($dni, $apellidos, $nombres, $email, $celular, $direccion) {
    return "Cliente registrado con éxito!!!";
}

function modificarCliente($id, $dni, $apellidos, $nombres, $email, $celular, $direccion) {
    return "Cliente modificado de manera correcta";
}

function eliminarCliente($id) {
    return "El cliente fue eliminado con éxito!!!";
}
?>