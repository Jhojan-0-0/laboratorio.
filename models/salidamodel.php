<?php
class Salidamodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function Guardar($idsolicitud,$nomproducto,$cantidad,$obs)
    {
        $sql = "INSERT INTO salida VALUES (null,'$idsolicitud','$nomproducto','$cantidad','$obs');";
        $this->conn->ConsultaSin($sql);
    }
  
}