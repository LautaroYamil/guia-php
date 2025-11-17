<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>

<h2>Ejercicio 9 - Nombre y Edad</h2>

<form method="POST" action="ejercicio9.php">
    Nombre: <input type="text" name="nombre" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo "<hr>";
    echo "Nombre ingresado: $nombre<br>";
    echo "Edad ingresada: $edad<br>";

    if ($edad >= 18) {
        echo "<strong>Es mayor de edad</strong>";
    } else {
        echo "<strong>Es menor de edad</strong>";
    }
}
?>

</body>
</html>
