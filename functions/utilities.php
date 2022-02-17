<?php

function filteredBy($array, $filter)
{
    $filtered = [];
    foreach ($array as $arrayEl) {
        foreach ($arrayEl as $key => $value) {
            if ($key === $filter && !(in_array($value, $filtered))) {
                    array_push($filtered, $value);
            }
        }
    }
    printArrayElements($filtered);
}

function printArrayElements($array)
{
    foreach ($array as $value) {
        echo "<span>$value</span>";
    }
}

function importFromApi ($key, $value, $point){
    if ($key===$point){
        echo "$value";
    }
}
?>
