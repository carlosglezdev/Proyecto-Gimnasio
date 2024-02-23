<?php
class Conexion
{
    public static function conectar()
    {
        try
        {
            $conexion = new PDO('mysql:host=localhost;dbname=nombre_database;charset=utf8','root','');
        }
        catch (PDOException $e)
        {
            echo "ERROR: ". $e->getMessage();
            die();
        }

        return $conexion;
    }
}