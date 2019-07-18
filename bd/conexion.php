<?php
class conexion
{
    public function getConexion()
    {
        $con = new mysqli("localhost", "root", "", "mvc");
        $con->query("SET NAMES 'utf8'");
        return $con;
    }

}
