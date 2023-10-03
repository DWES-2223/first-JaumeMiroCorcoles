<?php
include_once ("functions.php");
include_once ("atletes.php");
global $records;
echo "El record mas antiguo es en " . vell($records);
$resultados = laureado($records);
echo "<br/>";
echo "Club más laureado: " . $resultados['club'];
echo "<br/>";
echo "Atleta más laureado: " . $resultados['atleta'];
echo "<br/>";
echo "Ciudad más laureada: " . $resultados['ciutat'];
echo "<br/>";
$atletaMesJove = jove($records);
echo "El atleta más joven en conseguir un récord es: " . $atletaMesJove;
echo "<br/>";
include_once ("270.php");
