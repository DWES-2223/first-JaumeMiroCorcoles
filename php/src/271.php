<?php

include_once ("atletes.php");
global $records;
if($_SERVER["REQUEST_METHOD"] == "POST") {
$prova = $_POST['prova'];
$marca = $_POST["marca"];
$atleta = $_POST["atleta"];
$natalici = $_POST["natalici"];
$club = $_POST["club"];
$data = $_POST["data"];
$lloc = $_POST["lloc"];

if(isset($prova) && isset($marca) && isset($atleta) && isset($natalici) && isset($club) && isset($data) && isset($lloc)){
    if(array_key_exists($prova,$records)){
        $records[$prova]['marca'] = $marca;
        $records[$prova]['atleta'] = $atleta;
        $records[$prova]['natalici'] = $natalici;
        $records[$prova]['club'] = $club;
        $records[$prova]['data'] = $data;
        $records[$prova]['lloc'] = $lloc;
        include_once ("270a.php");
    }else{?>
        <a>La prova <?= $prova ?> no existeix en la llista de records oficials de la FEA</a>
    <?php }
}
}else{
    include ("Introducció de Record.html");
}
?>