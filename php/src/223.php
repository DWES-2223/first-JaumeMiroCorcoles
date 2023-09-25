<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if(isset($nombre)){
    ?>
    <table>
        <thead>
<tr>
    <td>a</td>
    <td>*</td>
    <td>b</td>
    <td>=</td>
    <td>a*b</td>
</tr>
</thead>
<tbody>
    <?php
    for ($i=1; $i <=10; $i++){
    ?>
    <tr>
        <td><?= $nombre ?></td>
        <td>*</td>
        <td><?= $i ?></td>
        <td>=</td>
        <td><?= $nombre * $i?></td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
    <?php
}else{
    echo "Posa el nombre pel QueryString";
}
?>
</body>
</html> 