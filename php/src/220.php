<!DOCTYPE html>
<html lang="es">
<?php
$i = 2
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
echo "<ul> ";
while ($i <= 50) {
    echo "<li>" . $i . "</li>";
    $i += 2;
}
echo "</ul>";
?>
</body>
</html> 