<!DOCTYPE html>
<html lang="es">
<?php
$numAleatorios = ["M","F"];
$contador = ["M" => 0,"F" => 0];
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
for ($i = 2; $i < 35; $i++) {
    if(rand(0,1)){
        $numAleatorios[$i] = "F";
        $contador["M"]++;
    }else{
        $numAleatorios[$i] = "M";
        $contador["F"]++;
    }
}
?>
<a>Hi han <?=$contador["M"]?></a><br/>
<a>Hi han <?=$contador["F"]?></a>
</body>
</html>
