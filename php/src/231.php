<!DOCTYPE html>
<html lang="es">
<?php
$numAleatorios = [];
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
for ($i = 0; $i < 33; $i++) {
    $numAleatorios[$i] = rand(0, 100);
} ?>
<?= max($numAleatorios)?><br/>
<?= min($numAleatorios)?><br>
<?= array_sum($numAleatorios)/count($numAleatorios)?>
</body>
</html>