<?php
class IngresoModel extends Model{
    function __construct()
    {
        parent::__construct();
    }
    // LISTAS COTIZACIONES
    public function ListarQuimico(){
        $sql = "SELECT idproducto,nombre,marca,clasificacion,fecFabricacion,fecVencimiento,numlote,fecAdquisicion,cantidadsin,um1,cantidadcon,um2,tipo,presentacion,precio,estante,nivel,codOC,horainicio,horafinal,fecCreate FROM productos;";
        $res = $this->conn->ConsultaCon($sql);

        return $res;
        //$mysqli->close();
    }

    public function GetQuimicoId($id)
    {
        $sql = "SELECT * FROM productos WHERE idproducto = " . $id;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
        $mysqli->close();
    }

    public function CreateQuimico($nombre,$marca,$clasificacion,$fecFabricacion,$fecVencimiento,$numlote,$fecAdquisicion,$cantidadsin,$um1,$cantidadcon,$um2,$tipo,$presentacion,$precio,$estante,$nivel,$codOC,$horainicio,$horafinal)
    {
        $sql = "INSERT INTO productos VALUES (null,'$nombre','$marca','$clasificacion','$fecFabricacion','$fecVencimiento','$numlote','$fecAdquisicion','$cantidadsin','$um1','$cantidadcon','$um2','$tipo','$presentacion','$precio','$estante','$nivel','$codOC','$horainicio','$horafinal');";
        
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    public function Buscarquimico($query){
        $sql = "SELECT * FROM productos WHERE nombre LIKE '%$query%' OR clasificacion LIKE '%$query%';";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
        $mysqli->close();
    }
    
    public function Delete($id)
    {
        $sql = "DELETE FROM productos WHERE idproducto = ".$id;
        $res = $this->conn->ConsultaSin($sql);
        return $res;
        $mysqli->close();
    }   

    public function UpdateQuimico($idquimico, $nombre, $concentracion, $tipoEnvase, $tamano, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $foto, $tipo, $precio, $clasificacion, $mililitros, $formula)
    {
        $sql = "UPDATE `quimicos_registro` SET `nombre` = '$nombre', `concentracion` = '$concentracion', `tipoEnvase` = '$tipoEnvase', `tamano` = '$tamano', `marca` = '$marca', `peso` = '$peso', `cantidad` = '$cantidad', `feFabricacion` = '$feFabricacion', `feVencimiento` = '$feVencimiento', `codProducto` = '$codProducto', `advertencia` = '$advertencia', `foto` = '$foto', `tipo` = '$tipo', `precio` = '$precio', `clasificacion` = '$clasificacion', `mililitros` = '$mililitros', `formula` = '$formula' WHERE (`idquimico` = '$idquimico');";

        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
}
