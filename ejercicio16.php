<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 16</title></head>
<body>

<h2>Ejercicio 16 - Leer Archivo de Pedidos</h2>

<?php
if (file_exists("pedidos.txt")) {
    $contenido = file("pedidos.txt");
    
    echo "<pre>";
    foreach ($contenido as $linea) {
        echo htmlspecialchars($linea);
    }
    echo "</pre>";
} else {
    echo "No existe el archivo pedidos.txt aún.";
}
?>

</body>
</html>
