<?php
include_once("../models/trabajadorDAO.php");
include_once("../models/sancionDAO.php");

if (isset($_POST['btnBuscar'])) {
    $cod = trim($_POST['cod_trabajador']);
    $trabajador = buscarTrabajadorPorCodigo($cod);
    if ($trabajador) {
        header("Location: ../views/frmRegistrarSancion.php?cod=" . $trabajador['codigo'] . 
               "&nom=" . urlencode($trabajador['apellidos_nombres']) . 
               "&cargo=" . urlencode($trabajador['cargo']) . 
               "&area=" . urlencode($trabajador['area']) . 
               "&fIng=" . $trabajador['fecha_ingreso']);
    } else {
        header("Location: ../views/frmRegistrarSancion.php?msg=" . urlencode("Trabajador no existe"));
    }
    exit();
}

if (isset($_POST['btnGrabar'])) {
    $cod = trim($_POST['cod_trabajador']);
    if (empty($cod)) {
        header("Location: ../views/frmRegistrarSancion.php?msg=" . urlencode("Debe buscar un trabajador primero"));
        exit();
    }
    $numGenerado = registrarSancionBD($cod, $_POST['tipo_sancion'], $_POST['fecha'], 
                                       trim($_POST['accion']), $_POST['dias'], trim($_POST['motivo']));
    if ($numGenerado) {
        $msg = "Sanción Nro. " . sprintf("%04d", $numGenerado) . " registrada correctamente";
        header("Location: ../views/frmRegistrarSancion.php?msg=" . urlencode($msg));
    } else {
        header("Location: ../views/frmRegistrarSancion.php?msg=" . urlencode("Error al registrar sanción"));
    }
    exit();
}
?>