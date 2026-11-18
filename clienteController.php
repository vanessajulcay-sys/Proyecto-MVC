<?php
include_once("../models/clienteDAO.php");

if (isset($_POST['btnRegistrar'])) {
    $m = insertarCliente(trim($_POST['dni']), trim($_POST['apellidos']), trim($_POST['nombres']), 
                         trim($_POST['email']), trim($_POST['celular']), trim($_POST['direccion']));
    header("Location: ../views/frmListarcliente.php?m=" . urlencode($m));
    exit();
} 
else if (isset($_POST['btnActualizar'])) {
    $m = modificarCliente($_POST['id'], trim($_POST['dni']), trim($_POST['apellidos']), 
                          trim($_POST['nombres']), trim($_POST['email']), trim($_POST['celular']), trim($_POST['direccion']));
    header("Location: ../views/frmListarcliente.php?m=" . urlencode($m));
    exit();
} 
else if (isset($_GET['idEliminar'])) {
    $m = eliminarCliente($_GET['idEliminar']);
    header("Location: ../views/frmListarcliente.php?m=" . urlencode($m));
    exit();
}

function listarClientesController() { return getClientes(); }
function obtenerClienteController($id) { return consultarCliente($id); }
?>