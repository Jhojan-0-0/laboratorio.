<?php
class Solicitudmodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function ListaPersonalPorCodigo($codigo)
    {
        $codigo = mysqli_real_escape_string($this->conn->conn, $codigo);

        $sql = "
            SELECT  p.idpersonal, p.codPersonal, p.nombre, p.apellidos, e.entidad FROM personal p INNER JOIN entidad e ON p.identidad = e.identidad WHERE p.codPersonal LIKE '%$codigo%' ORDER BY p.idpersonal DESC
        ";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function Guardar($idpersonal,$nomproducto,$cantidad,$unimedida,$usoproducto,$obs)
    {
        $sql = "INSERT INTO solicitud VALUES (null,'$idpersonal','$nomproducto','$cantidad','$unimedida','$usoproducto','$obs',now());";
        return $this->conn->ConsultaSin($sql);
    }

}