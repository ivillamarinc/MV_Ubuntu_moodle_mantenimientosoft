<?php

$studentGrades = getStudentGrades();

foreach ($studentGrades as $student) {

    $finalGrade = $student['grade'];

    if ($finalGrade >= 7) {

        $evaluationResult = "Aprobado";

    } else {

        $evaluationResult = "Reprobado";
    }

    echo $evaluationResult;
}
