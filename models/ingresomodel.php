<?php
class IngresoModel extends Model{
    function __construct()
    {
        parent::__construct();
    }
    // LISTAS COTIZACIONES
    public function mostrarDato(){
        $sql = "SELECT * from quimicos;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    public function registrarQuimico($nombre, $concentracion, $tipoEnvace, $tamanio, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $foto, $tipo, $precio, $clasificacion)
    {
        $sql = "INSERT INTO quimicos (nombre, concentracion, tipoEnvace, tamanio, marca, peso, cantidad, feFabricacion, feVencimiento, codProducto, advertencia, foto, tipo, precio, clasificacion) 
                VALUES ('$nombre', '$concentracion', '$tipoEnvace', '$tamanio', '$marca', '$peso', '$cantidad', '$feFabricacion', '$feVencimiento', '$codProducto', '$advertencia', '$foto', '$tipo', '$precio', '$clasificacion')";
        
        $data = $this->conn->ConsultaSin($sql);
        return $data;
    }

    public function buscarquimico($query){
        $sql = "SELECT * FROM quimicos WHERE nombre LIKE '%$query%' OR tipo LIKE '%$query%' OR clasificacion LIKE '%$query%';";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }
    
   
    
    
}



?>