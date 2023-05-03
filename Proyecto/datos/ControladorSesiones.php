<?php

require_once 'RepositorioUsuario.php';
require_once 'RepositorioLibro.php';
require_once 'Usuario.php';

class ControladorSesion
{
    protected $usuario = null;

    public function login($nombre_usuario, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->login($nombre_usuario, $clave);

        if ($usuario === false) {
            //Falló el login
            return [false, "Error de credenciales"];
        } else {
            //Login correcto, ingresar al sistema
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [true, "Usuario correctamente autenticado"];
        }
    }

    public function create($nombre_usuario, $nombreyapellido, $cuil, $email, $telefono, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = new Usuario($nombre_usuario, $nombreyapellido, $cuil);
        $id = $repo->save($usuario, $clave);
        if ($id === false) {
            return [false, "Error al crear el usuario"];
        } else {
            $usuario->setId($id);
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [true, "Usuario creado correctamente"];
        }
    }
}
