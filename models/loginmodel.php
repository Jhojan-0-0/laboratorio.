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
    
    function LastCodigo($idpersonal)
    {
        $sql = "SELECT idbitacora FROM bitacora WHERE estado = 0 and idpersonal = '$idpersonal' ORDER BY idbitacora DESC LIMIT 1;";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
    
    function Cerrar($horafinal,$tiempo,$idbitacora)
    {
        $sql = "UPDATE bitacora SET horafinal  = '$horafinal', tiempo = '$tiempo', estado = 1 WHERE idbitacora = $idbitacora;";
        echo $sql;
        $this->conn->ConsultaSin($sql);
    }
}
