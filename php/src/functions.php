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