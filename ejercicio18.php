<?php
$mensaje = "";

function validarClaves($c1, $c2) {
    if ($c1 != $c2) {
        return "Las claves NO coinciden.";
    }
    return "Las claves coinciden.";
}

if ($_POST) {
    $nombre = $_POST['usuario'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    $mensaje = validarClaves($clave1, $clave2);
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 18</title></head>
<body>

<h2>Ejercicio 18 - Funciones</h2>

<form method="POST">
    Usuario: <input type="text" name="usuario" required><br><br>
    Clave: <input type="password" name="clave1" required><br><br>
    Repetir clave: <input type="password" name="clave2" required><br><br>
    <button type="submit">Enviar</button>
</form>

<?php if ($mensaje): ?>
<hr>
<p><strong><?= $mensaje ?></strong></p>
<?php endif; ?>

</body>
</html>
