<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Cliente</title>
</head>
<body>
    <h2>MODIFICAR CLIENTE</h2>
    <?php
    include_once("../controllers/clienteController.php");
    if (isset($_GET['id'])) {
        $row = obtenerClienteController($_GET['id']);
        if ($row) {
    ?>
    <form method="post" action="../controllers/clienteController.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        DNI: <input type="text" name="dni" value="<?php echo htmlspecialchars($row['dni']); ?>" required/><br><br>
        Apellidos: <input type="text" name="apellidos" value="<?php echo htmlspecialchars($row['apellidos']); ?>" required/><br><br>
        Nombres: <input type="text" name="nombres" value="<?php echo htmlspecialchars($row['nombres']); ?>" required/><br><br>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required/><br><br>
        Celular: <input type="text" name="celular" value="<?php echo htmlspecialchars($row['celular']); ?>" required/><br><br>
        Dirección: <input type="text" name="direccion" value="<?php echo htmlspecialchars($row['direccion']); ?>" required/><br><br>
        <input type="submit" name="btnActualizar" value="Actualizar Cliente"/>
        <a href="frmListarcliente.php">Cancelar</a>
    </form>
    <?php }} ?>
</body>
</html>