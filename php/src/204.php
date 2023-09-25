<!DOCTYPE html>
<html lang="es">
<?php
$anyActual = date("Y");

?>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if(isset($_GET["edat"])){
        $edat = $_GET['edat'];
        echo $edat - 10 . "<br>";
        echo $edat + 10 . "<br>";
        echo (67 - $edat) + $anyActual;
    }else{
    echo 'Posa la teu edat actual a la variable edat pel QueryString';
    }
    ?>
</body>
</html> 