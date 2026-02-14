<?php
class Galeriamodel extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function Fiscalizados()
    {
        $sql = "SELECT COUNT(*) AS total FROM quimicos_registro WHERE tipo = 'Fiscalizado';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function Normalizados()
    {
        $sql = "SELECT COUNT(*) AS total FROM quimicos_registro WHERE tipo = 'Comunes';";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
    public function Acidos()
    {
        $sql = "SELECT COUNT(*) AS total FROM quimicos_registro WHERE clasificacion = 'Acidos';";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
    public function Basicos()
    {
        $sql = "SELECT COUNT(*) AS total FROM quimicos_registro WHERE clasificacion = 'Basicos';";
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }
}


?>