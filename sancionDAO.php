<?php
include_once("conexion.php");

function registrarSancionBD($cod_trabajador, $tipo_sancion, $fecha, $accion, $dias, $motivo) {
    // Simula el registro exitoso y retorna un número de sanción correlativo
    return rand(1000, 9999);
}
?>