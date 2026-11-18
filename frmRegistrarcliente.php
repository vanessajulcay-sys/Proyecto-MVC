<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Registrar Cliente</title></head>
<body>
    <h2>REGISTRO DE CLIENTE</h2>
    <form method="post" action="../controllers/clienteController.php">
        DNI: <input type="text" name="dni" maxlength="8" required/><br><br>
        Apellidos: <input type="text" name="apellidos" required/><br><br>
        Nombres: <input type="text" name="nombres" required/><br><br>
        Email: <input type="email" name="email" required/><br><br>
        Celular: <input type="text" name="celular" maxlength="9" required/><br><br>
        Dirección: <input type="text" name="direccion" required/><br><br>
        <input type="submit" name="btnRegistrar" value="Registrar Cliente"/>
        <a href="frmListarcliente.php">Volver a la Lista</a>
    </form>
</body>
</html>
