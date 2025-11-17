<?php
$mensaje = '';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $deportes = $_POST['deportes'] ?? [];
    $cantidad = count($deportes);

    $mensaje = "$nombre practica $cantidad deporte(s).";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
</head>
<body>

<h2>Ejercicio 11 - Checkbox</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>

    <label><input type="checkbox" name="deportes[]" value="futbol"> Fútbol</label><br>
    <label><input type="checkbox" name="deportes[]" value="basket"> Basket</label><br>
    <label><input type="checkbox" name="deportes[]" value="tennis"> Tennis</label><br>
    <label><input type="checkbox" name="deportes[]" value="voley"> Voley</label><br><br>

    <button type="submit">Enviar</button>
</form>

<?php if ($mensaje): ?>
    <hr>
    <p><strong><?= $mensaje ?></strong></p>
<?php endif; ?>

</body>
</html>
