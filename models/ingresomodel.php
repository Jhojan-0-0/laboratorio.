<?php
class IngresoModel extends Model{
    function __construct()
    {
        parent::__construct();
    }
    // LISTAS COTIZACIONES
    public function ListarQuimico(){
        $sql = "SELECT * from quimicos_registro;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    public function registrarQuimico($nombre, $concentracion, $tipoEnvace, $tamanio, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $foto, $tipo, $precio, $clasificacion, $formula)
    {
        $sql = "INSERT INTO quimicos_registro (nombre, concentracion, tipoEnvace, tamanio, marca, peso, cantidad, feFabricacion, feVencimiento, codProducto, advertencia, foto, tipo, precio, clasificacion, formula) 
                VALUES ('$nombre', '$concentracion', '$tipoEnvace', '$tamanio', '$marca', '$peso', '$cantidad', '$feFabricacion', '$feVencimiento', '$codProducto', '$advertencia', '$foto', '$tipo', '$precio', '$clasificacion', '$formula')";
        $data = $this->conn->ConsultaSin($sql);
        return $data;
    }

    public function Buscarquimico($query){
        $sql = "SELECT * FROM quimicos_registro WHERE nombre LIKE '%$query%' OR codProducto LIKE '%$query%' OR formula LIKE '%$query%';";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }
    
    public function Delete($id)
    {
        $sql = "DELETE FROM `laboratorioUNA`.`quimicos_registro` WHERE (`idquimico` = '$id');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }   
}

?>