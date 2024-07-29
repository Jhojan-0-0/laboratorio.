<?php
class Entregamodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function GetEntrega()
    {
        $sql = "SELECT identrega, nombre, fecEntrega, codquimico, cantidad, descripcion, marca, entidad, docente FROM v_consulta;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    function Guardar($idquimico, $fecEntrega,$codquimico,$cantidad,$descripcion,$marca,$identidad,$docente)
    {
        $sql = "INSERT INTO quimicos_entrega VALUES (null, $idquimico, '$fecEntrega','$codquimico',$cantidad,'$descripcion','$marca','$identidad','$docente');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    function ListaQuimicos()
    {
        $sql = "SELECT idquimico, nombre FROM quimicos_registro;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function ListaEntidad()
    {
        $sql = "SELECT identidad, entidad FROM entidad;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function getDatos($idquimico)
    {
        $sql = "SELECT idquimico, nombre, marca, codProducto FROM quimicos_registro WHERE idquimico = " . $idquimico;
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    public function buscarentrega($query){
        $sql = "SELECT * FROM v_consulta WHERE nombre LIKE '%$query%' OR entidad LIKE '%$query%' OR fecEntrega LIKE '%$query%' OR codquimico LIKE '%$query%' OR docente LIKE '%$query%';";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    public function createEntidad($entidad, $sigla,$localidad,$fecCreate)
    {
        $sql = "INSERT INTO `laboratorioUNA`.`entidad` (`entidad`, `sigla`, `localidad`, `fecCreate`) VALUES ('$entidad', '$sigla', '$localidad', '$fecCreate');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
}


?>