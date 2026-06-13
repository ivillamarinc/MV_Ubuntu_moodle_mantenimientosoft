<?php

class UserManager {

    public function createUser($username, $password) {

        // Validaciones repetidas
        if (empty($username)) {
            throw new Exception("Usuario requerido");
        }

        if (empty($password)) {
            throw new Exception("Contraseña requerida");
        }

        echo "Usuario creado";
    }

    public function updateUser($username, $password) {

        // Mismo código repetido
        if (empty($username)) {
            throw new Exception("Usuario requerido");
        }

        if (empty($password)) {
            throw new Exception("Contraseña requerida");
        }

        echo "Usuario actualizado";
    }
}
