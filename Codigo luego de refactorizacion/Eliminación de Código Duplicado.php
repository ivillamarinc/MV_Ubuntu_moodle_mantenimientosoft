<?php

class UserManager {

    // Función reutilizable para validaciones
    private function validateCredentials(
        $username,
        $password
    ) {

        if (empty($username)) {
            throw new Exception("Usuario requerido");
        }

        if (empty($password)) {
            throw new Exception("Contraseña requerida");
        }
    }

    public function createUser($username, $password) {

        $this->validateCredentials(
            $username,
            $password
        );

        echo "Usuario creado";
    }

    public function updateUser($username, $password) {

        $this->validateCredentials(
            $username,
            $password
        );

        echo "Usuario actualizado";
    }
}
