<?php
class LoginModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function validar($usuario,$pass)
    {
        $sql = "SELECT idlogin, idpersonal, nivusu, estado FROM login WHERE username = '$usuario' AND passwd = '$pass';";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    function bitacora($idpersonal,$ip,$horainicio)
    {
        $sql = "INSERT INTO bitacora VALUES (null,'$idpersonal','$ip','$horainicio','$horainicio','0');";
        echo $sql;
        $this->conn->ConsultaSin($sql);
    }
    
    function LastCodigo($idpersonal)
    {
        $sql = "SELECT idbitacora FROM bitacora WHERE estado = 0 and idpersonal = '$idpersonal' ORDER BY idbitacora DESC LIMIT 1;";
        echo $sql;
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
    
    function Cerrar($horafinal,$idbitacora)
    {
        $sql = "UPDATE bitacora SET horafinal = '$horafinal', estado = 1 WHERE idbitacora = $idbitacora;";
        echo $sql;
        $this->conn->ConsultaSin($sql);
    }
    
}
