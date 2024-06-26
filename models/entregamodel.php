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
}


?>