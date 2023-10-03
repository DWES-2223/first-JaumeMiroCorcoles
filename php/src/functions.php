<?php
function esParell(int $a) : bool{
    return $a%2 == 0;
}
function arrayAleatori(int $tam, int $min, int $max) : array{
    $array = [];
    for($i = 0; $i < $tam; $i++){
        $array[$i] = rand($min,$max);
    }
    return $array;
}

function countParells(array &$array) : int {
    $parells = 0;
    for ($i = 0; $i < count($array); $i++) {
        if(esParell($array[$i])){
            $parells++;
        }
    }
    return $parells;
}

function major() : int{
    $array = func_get_args();
    $major = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if($major < $array[$i]){
            $major = $array[$i];
        }
    }
    return $major;
}

function concatenar(...$paraules) : String{
    $cadena ="";
    foreach ($paraules as $paraula){
        $cadena = $cadena . " " . $paraula;
    }
    return $cadena;
}

function digits(int $num) : int{
    return strlen($num);
}

function digitsN(int $num, int $post): int{
    $palabra = strval($num)[$post];
    return $palabra;
}
function euro2pesetes(float $euros):int {
    return $euros *  166;
}

function fecha_inglesa(string $fecha):string{
    $fechaSeparada = explode(".",$fecha);
    return $fechaSeparada[2] . "/" . $fechaSeparada[1] . "/" . $fechaSeparada[0];
}

function compararFecha($fecha1, $fecha2){
    if($fecha2 == "") {
        return $fecha1;
    }
    return fecha_inglesa($fecha1) < fecha_inglesa($fecha2);
}

function vell($array):mixed{
    $vell = "";
    $fechaMajor = "";
    foreach ($array as $prova => $record) {
        if(compararFecha($record['data'],$fechaMajor)){
            $fechaMajor = $record['data'];
            $vell = $prova;

        }
    }
    return $vell;
}

function laureado($array) {
    $clubs = array();
    $atletes = array();
    $ciutats = array();

    foreach ($array as $record) {
        $club = $record['club'];
        $atleta = $record['atleta'];
        $ciutat = $record['lloc'];

        if (isset($clubs[$club])) {
            $clubs[$club]++;
        } else {
            $clubs[$club] = 1;
        }

        if (isset($atletes[$atleta])) {
            $atletes[$atleta]++;
        } else {
            $atletes[$atleta] = 1;
        }

        if (isset($ciutats[$ciutat])) {
            $ciutats[$ciutat]++;
        } else {
            $ciutats[$ciutat] = 1;
        }
    }
    $clubLaureado = encontrarMasLaureado($clubs);
    $atletaLaureado = encontrarMasLaureado($atletes);
    $ciudadLaureada = encontrarMasLaureado($ciutats);

    return array('club' => $clubLaureado, 'atleta' => $atletaLaureado, 'ciutat' => $ciudadLaureada);
}

function encontrarMasLaureado($array) {
    $masLaureado = null;
    $contador = 0;

    foreach ($array as $valor => $num) {
        if ($num > $contador) {
            $masLaureado = $valor;
            $contador = $num;
        }
    }

    return $masLaureado;
}

function any($data) {
    $parts = explode(".", $data);

    $any = end($parts);

    return $any;
}

function jove($records) {
    $atletaMesJove = null;
    $edatMesJove = PHP_INT_MAX;

    foreach ($records as $record) {
        $natalici = any($record["natalici"]);
        $data = any($record["data"]);
        $edat = $data - $natalici;

        if ($edat < $edatMesJove) {
            $atletaMesJove = $record["atleta"];
            $edatMesJove = $edat;
        }
    }
    return $atletaMesJove;
}







