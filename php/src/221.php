<!DOCTYPE html>
<html lang="es">
<?php
$num = 0;
$i = 1;
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
while($i <= 10){
    $num += $i;
    echo $i;
    if($i != 10){
        echo "+";
    }
    $i++;
}
echo "=" . $num;
?>
</body>
</html> 