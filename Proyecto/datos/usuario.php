<?php
class Usuario
{
    private $id;
    private $cuil;
    private $nombreyapellido;
    private $email;
    private $telefono;
    private $clave;
    private $foto;
    private $ubicacion;

    public function __construct($nombreyapellido, $cuil, $email, $telefono, $clave, $foto, $ubicacion, $id = null)
    {
        $this->id = $id;
        $this->nombreyapellido = $nombreyapellido;
        $this->email = $email;
        $this->cuil = $cuil;
        $this->telefono = $telefono;
        $this->clave = $clave;
        $this->foto = $foto;
        $this->ubicacion = $ubicacion;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombreyapellido()
    {
        return $this->nombreyapellido;
    }

    public function setNombreyapellido($nombreyapellido)
    {
        $this->nombreyapellido = $nombreyapellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCuil()
    {
        return $this->cuil;
    }

    public function setCuil($cuil)
    {
        $this->cuil = $cuil;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
}
