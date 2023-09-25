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
for ($i = 0; $i < 50; $i++) {
    $numAleatorios[$i] = rand(0, 99);
} ?>
<?php
for($j = 0; $j < 50; $j++) {?>
    <li><?= $numAleatorios[$j] ?></li>
<?php }?>

</body>
</html>