<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Registrar Sanción</title></head>
<body style="margin: 20px;">
    <h2>REGISTRAR SANCIÓN - FINANCIERA ABC</h2>
    <?php
    if (isset($_GET['msg'])) { echo "<script>alert('" . htmlspecialchars($_GET['msg']) . "');</script>"; }
    $cod = $_GET['cod'] ?? ''; $nom = $_GET['nom'] ?? ''; $cargo = $_GET['cargo'] ?? ''; $area = $_GET['area'] ?? ''; $fIng = $_GET['fIng'] ?? '';
    ?>
    <form method="post" action="../controllers/sancionController.php" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
        <h3>Datos del Trabajador</h3>
        Código: <input type="text" name="cod_trabajador" value="<?php echo htmlspecialchars($cod); ?>" required/>
        <input type="submit" name="btnBuscar" value="Buscar Trabajador"/><br><br>
        Apellidos y Nombres: <input type="text" size="40" value="<?php echo htmlspecialchars($nom); ?>" readonly/><br><br>
        Cargo: <input type="text" value="<?php echo htmlspecialchars($cargo); ?>" readonly/>
        Área: <input type="text" value="<?php echo htmlspecialchars($area); ?>" readonly/>
        Fecha Ingreso: <input type="text" value="<?php echo htmlspecialchars($fIng); ?>" readonly/>
    </form>

    <form method="post" action="../controllers/sancionController.php" style="border: 1px solid #ccc; padding: 15px;">
        <h3>Datos de la Sanción</h3>
        <input type="hidden" name="cod_trabajador" value="<?php echo htmlspecialchars($cod); ?>"/>
        Tipo de Sanción:
        <select name="tipo_sancion" required>
            <option value="Amonestación">Amonestación</option>
            <option value="Suspensión">Suspensión</option>
            <option value="Cese por despido">Cese por despido</option>
        </select><br><br>
        Fecha: <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" required/><br><br>
        Acción: <input type="text" name="accion" required/><br><br>
        Días: <input type="number" name="dias" value="0" min="0" required/><br><br>
        Motivo: <br><textarea name="motivo" rows="4" cols="40" required></textarea><br><br>
        <input type="submit" name="btnGrabar" value="Grabar Sanción"/>
        <a href="../index.php"><button type="button">Menú Principal</button></a>
    </form>
</body>
</html>
