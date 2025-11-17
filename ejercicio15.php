<?php
$mensaje = "";

if ($_POST) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];

    $pizzas = [];

    if (isset($_POST['jyq'])) {
        $pizzas[] = "Jamon y queso (".$_POST['cant_jyq']." unidades)";
    }
    if (isset($_POST['napo'])) {
        $pizzas[] = "Napolitana (".$_POST['cant_napo']." unidades)";
    }
    if (isset($_POST['muzza'])) {
        $pizzas[] = "Muzzarella (".$_POST['cant_muzza']." unidades)";
    }

    $archivo = fopen("pedidos.txt", "a");
    fwrite($archivo, "Nombre: $nombre\n");
    fwrite($archivo, "Direccion: $direccion\n");
    fwrite($archivo, "Pizzas: ".implode(", ", $pizzas)."\n");
    fwrite($archivo, "-----------------------------------\n");
    fclose($archivo);

    $mensaje = "Pedido guardado correctamente!";
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 15</title></head>
<body>

<h2>Ejercicio 15 - Pizzería (Archivo de texto)</h2>

<?php if ($mensaje): ?>
<p><strong><?= $mensaje ?></strong></p>
<?php endif; ?>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Dirección: <input type="text" name="direccion" required><br><br>

    <label><input type="checkbox" name="jyq"> Jamón y Queso</label>
    Cantidad: <input type="number" name="cant_jyq" value="0"><br>

    <label><input type="checkbox" name="napo"> Napolitana</label>
    Cantidad: <input type="number" name="cant_napo" value="0"><br>

    <label><input type="checkbox" name="muzza"> Muzzarella</label>
    Cantidad: <input type="number" name="cant_muzza" value="0"><br><br>

    <button type="submit">Confirmar</button>
</form>

</body>
</html>
