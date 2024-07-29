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

    public function GetQuimicoId($id)
    {
        $sql = "SELECT * FROM quimicos_registro WHERE idquimico = '$id'";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function CreateQuimico($nombre, $concentracion, $tipoEnvase, $tamano, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $tipo, $precio, $clasificacion, $mililitros, $formula, $foto)
    {
        $sql = "INSERT INTO `laboratorioUNA`.`quimicos_registro` (`nombre`, `concentracion`, `tipoEnvase`, `tamano`, `marca`, `peso`, `cantidad`, `feFabricacion`, `feVencimiento`, `codProducto`, `advertencia`, `tipo`, `precio`, `clasificacion`, `mililitros`, `formula`, `foto`) VALUES ('$nombre', '$concentracion', '$tipoEnvase', '$tamano', '$marca', '$peso', '$cantidad', '$feFabricacion', '$feVencimiento', '$codProducto', '$advertencia', '$tipo', '$precio', '$clasificacion', '$mililitros', '$formula', '$foto');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
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

    public function UpdateQuimico($idquimico, $nombre, $concentracion, $tipoEnvase, $tamano, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $foto, $tipo, $precio, $clasificacion, $mililitros, $formula)
    {
        $sql = "UPDATE `laboratorioUNA`.`quimicos_registro` SET `nombre` = '$nombre', `concentracion` = '$concentracion', `tipoEnvase` = '$tipoEnvase', `tamano` = '$tamano', `marca` = '$marca', `peso` = '$peso', `cantidad` = '$cantidad', `feFabricacion` = '$feFabricacion', `feVencimiento` = '$feVencimiento', `codProducto` = '$codProducto', `advertencia` = '$advertencia', `tipo` = '$tipo', `precio` = '$precio', `clasificacion` = '$clasificacion', `mililitros` = '$mililitros', `formula` = '$formula' WHERE (`idquimico` = '$idquimico');";

        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
}

?>