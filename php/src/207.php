<!DOCTYPE html>
<html lang='es'>
<?php
$num1 = $_GET['numero1']??null;
$num2 = $_GET['numero2']??null;
$num3 = $_GET['numero3']??null;
?>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
    if(isset($num1)&& isset($num2) && isset($num3)){
        $mayor = max($num1,$num2,$num3);
        echo 'El nombre més gran entre '. $num1 .', '. $num2 .' i ' .$num3 .' és el '. $mayor;
    }else{
        echo 'Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString';
    }
    ?>
</body>
</html>