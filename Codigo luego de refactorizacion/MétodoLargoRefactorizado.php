<?php

class CourseManager {

    // Método principal simplificado
    public function processCourse() {

        $this->validateData();

        $course = $this->loadCourseData();

        $this->calculateStudentAverages($course);

        $this->showResult();
    }

    // Validación aislada
    private function validateData() {

        if (!$this->validateUser()) {
            throw new Exception("Usuario no autorizado");
        }
    }

    // Obtención de datos centralizada
    private function loadCourseData() {

        return $this->loadCourse();
    }

    // Cálculo de promedios separado
    private function calculateStudentAverages($course) {

        foreach ($course->students as $student) {

            $total = array_sum($student->grades);

            $student->average =
                $total / count($student->grades);
        }
    }

    // Generación de respuesta
    private function showResult() {

        echo "Proceso completado correctamente";
    }
}
