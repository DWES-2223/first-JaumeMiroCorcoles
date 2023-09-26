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
for ($i = 0; $i < 100; $i++) {
    if(rand(0,1)){
        $numAleatorios[$i] = "F";
        $contador["M"]++;
    }else{
        $numAleatorios[$i] = "M";
        $contador["F"]++;
    }
}
var_dump($contador);
?>
<a>Hi han <?=$contador["M"]?> M</a><br/>
<a>Hi han <?=$contador["F"]?> F</a>
</body>
</html>
