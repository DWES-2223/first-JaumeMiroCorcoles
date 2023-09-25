<!DOCTYPE html>
<html lang="es">
<?php
$nom = 'Jaume';
$cognom1 = 'Miro';
$cognom2 = 'Corcoles';
$email = 'miro.jaumee@gmail.com';
$naixement = '2004';
$telefon = '667884662';
?>
<style>
table, td {
  border:1px solid black;
}
</style>
<body>
<table>
<tr>
    <td>Nom</td>
    <td><?= $nom ?></td>
</tr>
<tr>
    <td>Cognoms</td>
    <td><?= $cognom1 . ' ' . $cognom2?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?= $email?></td>
</tr>
<tr>
    <td>Natalici</td>
    <td><?= $naixement?></td>
</tr>
<tr>
    <td>Telèfon</td>
    <td><?= $telefon?></td>
  </tr>

</table>
</body>
</html>