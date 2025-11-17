<?php
include("conexion.php");
conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía PHP Completa + MySQL (AA22)</title>
</head>
<body>

<h1>Guía de PHP Completa (AA22)</h1>

<h3>Menú dinámico</h3>

<ul>
<?php
// LEER LA TABLA MENU DESDE LA BASE DE DATOS
$sql = mysqli_query($con, "SELECT * FROM menu ORDER BY id ASC");

while ($row = mysqli_fetch_assoc($sql)) {
    echo "<li><a href='index.php?modulo=".$row['archivo']."'>".$row['nombre']."</a></li>";
}
?>
</ul>

<hr>

<?php
// CARGAR EL EJERCICIO SELECCIONADO
if (!empty($_GET['modulo'])) {

    $modulo = basename($_GET['modulo']); // evita hackeo
    $ruta = "modulos/".$modulo.".php";

    if (file_exists($ruta)) {
        include($ruta);
    } else {
        echo "<p>El ejercicio solicitado no existe.</p>";
    }

} else {
    echo "<p>Seleccione un ejercicio del menú.</p>";
}
?>

</body>
</html>
