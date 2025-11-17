<?php
$salida = '';

if ($_POST) {
    $contrato = $_POST['contrato'];
    $salida = nl2br(htmlspecialchars($contrato));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>
<body>

<h2>Ejercicio 13 - Contrato</h2>

<?php if (!$salida): ?>

<form method="POST">
<textarea name="contrato" rows="12" cols="70">
En la ciudad de [........], se acuerda entre la Empresa [..........]
representada por el Sr. [..............] en su carácter de Apoderado,
con domicilio en la calle [..............] y el Sr. [..............],
futuro empleado, celebrar el presente contrato.
</textarea><br><br>

<button type="submit">Procesar</button>
</form>

<?php else: ?>

<h3>Contrato Procesado:</h3>
<p><?= $salida ?></p>

<?php endif; ?>

</body>
</html>
