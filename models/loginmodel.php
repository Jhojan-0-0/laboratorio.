<?php
class LoginModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function validar($usuario,$pass)
    {
        $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND pass = '$pass';";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
}
