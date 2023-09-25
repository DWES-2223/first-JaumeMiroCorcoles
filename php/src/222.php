<!DOCTYPE html>
<html lang="es">
<?php
$base = $_GET["base"]??null;
$exponent = $_GET["exponent"]??null;
$baseFinal = $base;
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if(isset($base)&& isset($exponent)){
    if($exponent == 0){
        echo($base . "^" . $exponent . " = 1");
    }else{
        for($i = 1; $i < $exponent; $i++){
            $base = $base * $baseFinal;
        }
        echo $baseFinal . '^' . $exponent . ' = ' . $base;
    }
}else{
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}
?>
</body>
</html> 