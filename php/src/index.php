<?php
include_once ("functions.php");
echo esParell(7)?"SI":"NO";
echo "<br/>";
$array = arrayAleatori(3,0,9);
for ($i = 0; $i < count($array); $i++){
    echo $array[$i];
}
echo "<br/>";
echo countParells($array);
echo "<br/>";
echo major(5,8,2,9);
echo "<br/>";
echo concatenar("Hola", "que", "Tal");
echo "<br/>";
echo digits(230);
echo "<br/>";
echo digitsN(230,1);
?>
