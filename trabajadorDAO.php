<?php
include_once("conexion.php");

function buscarTrabajadorPorCodigo($codigo) {
    // Retorna datos de prueba del trabajador si el código coincide
    if ($codigo == "T001" || $codigo == "1") {
        return [
            'codigo' => 'T001',
            'apellidos_nombres' => 'Pérez Gómez, Juan Carlos',
            'cargo' => 'Analista de Créditos',
            'area' => 'Finanzas',
            'fecha_ingreso' => '2022-03-15'
        ];
    }
    return null;
}
?>