<?php
require_once '.env.php';
require_once 'Usuario.php';

class RepositorioUsuario
{
    private $conn;

    public function __construct()
    {
        if (is_null($this->conn)) {
            $credenciales = credenciales();
            $this->conn = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']
            );
            if ($this->conn->connect_error) {
                $error = 'Error de conexión: ' . $this->conn->connect_error;
                $this->conn = null;
                die($error);
            }
            echo "Conexion exitosa<br>";
            $this->conn->set_charset('utf8');
        } else {
            echo "Hubo un fallo<br>";
        }
    }
 
    public function login($nombre_usuario, $clave)
    {
        $q = "SELECT id_usuario, nombre_usuario, nombreyapellido, clave, cuil, postulacion_colegio FROM docentes";
        $q .= "WHERE nombre_usuario = ?";

        $id_usuario = "";
        $nombre_usuario = "";
        $clave_encriptada = "";
        $nombreyapellido = "";
        $cuil = "";
        $postulacion_colegio = "";

        if ($query = $this->conn->prepare($q)) {
            echo "pase por la prepare<br>";
            $query->bind_param("s", $nombre_usuario);
            echo "pase por el bind param<br>";
            if ($query->execute()) {
                echo "pase por la execute<br>";
                if ($query->bind_result($id_usuario, $clave_encriptada, $nombreyapellido, $cuil)) {
                    if ($query->fetch()) {
                        echo "pase por fetch<br>";
                        echo $nombreyapellido;
                        if (password_verify($clave, $clave_encriptada)) {
                            return new Usuario($nombre_usuario, $nombreyapellido, $cuil, $id_usuario);
                        } else {
                            echo "fallo la identificacion";
                        }
                    }
                }
            }
        }

        return false;
    }

/*
    public function save(Usuario $u, $clave)
    {
        $q = "INSERT INTO users (user,name, surname,password) ";
        $q .= "VALUES (?, ?, ?, ?)";
        $query = $this->conn->prepare($q);
        $usuario = $u->getNombre_usuario();
        $nombre = $u->getNombre();
        $apellido = $u->getApellido();
        $clave = password_hash($clave, PASSWORD_DEFAULT);
        $query->bind_param("ssss", $usuario, $nombre, $apellido, $clave);
        echo "pase el bindparam del save";

        if ($query->execute()) {
            return $this->conn->insert_id;
        } else {
            return false;
        }
    }

    public function actualizar(Usuario $u)
    {
        $q = "UPDATE users ";
        $q .= "SET user = ?, name = ?, surname = ?";
        $q .= "WHERE id = ?";
        $query = $this->conn->prepare($q);

        $usuario = $u->getNombre_usuario();
        $nombre = $u->getNombre();
        $apellido = $u->getApellido();
        $id = $u->getId();

        $query->bind_param("ssssd", $usuario, $nombre, $apellido, $id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar(Usuario $u)
    {
        $q = "DELETE FROM users WHERE id = ?";
        $query = $this->conn->prepare($q);

        $id = $u->getId();

        $query->bind_param("d", $id);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
*/
}
