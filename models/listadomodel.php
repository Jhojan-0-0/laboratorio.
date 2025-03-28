<?php
class ListadoModel extends Model{
    function __construct()
    {
        parent::__construct();
    }
    public function Getcomunes(){
        $sql = "SELECT * from quimicos_registro WHERE tipo = 'comunes';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    public function Getfiscalizados(){
        $sql = "SELECT * from quimicos_registro WHERE tipo = 'Fiscalizado';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    public function Getacidos(){
        $sql = "SELECT * FROM quimicos_registro WHERE clasificacion = 'acidos';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    public function Getbasicos(){
        $sql = "SELECT * FROM quimicos_registro WHERE clasificacion = 'basicos';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}



?>