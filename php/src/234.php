<!DOCTYPE html>
<html lang="es">
<?php
$persones = ["jaume" => 1.80,"lucas" => 1.78,"arantxa" => 1.70,"arthur" => 1.83,"javi" => 1.76];
?>
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <thead>
    <td>Nom</td>
    <td>Altura</td>
    </thead>
    <?php
    foreach ($persones as $persona => $altura){?>
        <tr>
            <td><?= $persona?></td>
            <td><?= $altura?></td>
        </tr>
    <?php } ?>
</body>
</html>
