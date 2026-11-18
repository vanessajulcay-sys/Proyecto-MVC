<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
</head>
<body bgcolor="#FFFFCC">
    <?php
    include_once("../controllers/clienteController.php");
    if (isset($_GET['m'])) {
        echo "<script>alert('" . htmlspecialchars($_GET['m']) . "');</script>";
    }
    ?>
    <h1 align="center" style="color: red;">DATOS DE CLIENTES</h1>
    <p align="center">
        <a href="frmRegistrarcliente.php">➕ Registrar Nuevo Cliente</a> | 
        <a href="../index.php">🏠 Menú Principal</a>
    </p>
    <table border="1" align="center" width="90%" cellpadding="5">
        <tr bgcolor="#CCCCCC">
            <th>ID</th><th>DNI</th><th>Apellidos</th><th>Nombres</th><th>Email</th><th>Celular</th><th>Dirección</th><th>Modificar</th><th>Eliminar</th>
        </tr>
        <?php
        $data = listarClientesController();
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id'] . "</td>";
            echo "<td align='center'>" . htmlspecialchars($row['dni']) . "</td>";
            echo "<td>" . htmlspecialchars($row['apellidos']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nombres']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td align='center'>" . htmlspecialchars($row['celular']) . "</td>";
            echo "<td>" . htmlspecialchars($row['direccion']) . "</td>";
            echo "<td align='center'><a href='frm_modificarcliente.php?id=" . $row['id'] . "'>Modificar</a></td>";
            echo "<td align='center'><a href='../controllers/clienteController.php?idEliminar=" . $row['id'] . "' onclick='return confirm(\"¿Eliminar cliente?\");'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>