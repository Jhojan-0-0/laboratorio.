<?php
class Entregamodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function GetEntrega()
    {
        $sql = "SELECT identrega, idquimico, feEntrega, codSalida, cantidad, descripcion, marca, facultad, docente FROM entregaquimicos;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    function Guardar($idquimico, $fechaEntrega,$codSalida,$cantidad,$descripcion,$marca,$facultad,$docente)
    {
        $sql = "INSERT INTO entregaquimicos VALUES (null, $idquimico, '$fechaEntrega',$codSalida,$cantidad,'$descripcion','$marca','$facultad','$docente');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
}


?>