<?php

class CourseManager {

    public function processCourse() {

        // Validar si el usuario tiene permisos
        if (!$this->validateUser()) {
            echo "Usuario no autorizado";
            return;
        }

        // Obtener información del curso
        $course = $this->loadCourse();

        if (!$course) {
            echo "Curso no encontrado";
            return;
        }

        // Recorrer estudiantes y calcular promedio
        foreach ($course->students as $student) {

            $total = 0;

            foreach ($student->grades as $grade) {
                $total += $grade;
            }

            $student->average =
                $total / count($student->grades);
        }

        // Mostrar mensaje final
        echo "Proceso completado correctamente";
    }
}
