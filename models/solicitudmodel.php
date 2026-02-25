<?php
class Solicitudmodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function Guardar($codpersonal,$nomproducto,$cantidad,$unimedida,$usoproducto,$obs)
    {
        $sql = "INSERT INTO solicitud VALUES (null,'$codpersonal','$nomproducto','$cantidad','$unimedida','$usoproducto','$obs',now());";
        $this->conn->ConsultaSin($sql);
    }
  
}