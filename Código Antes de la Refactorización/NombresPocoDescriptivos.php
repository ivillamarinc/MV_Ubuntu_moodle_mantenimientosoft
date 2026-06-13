<?php

$d = getData();

foreach ($d as $x) {

    $g = $x['grade'];

    if ($g >= 7) {
        $r = "Aprobado";
    } else {
        $r = "Reprobado";
    }

    echo $r;
}
