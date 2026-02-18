<?php
class ValidarModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function validar($usuario,$pass)
    {
        $sql = "INSERT INTO validacion VALUES (null,'$idproducto','$encontrado','$completo','$obs','$fecCreate');";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    public function ListarQuimico(){
        $sql = "SELECT idproducto,nombre,marca,clasificacion,fecFabricacion,fecVencimiento,numlote,fecAdquisicion,cantidadsin,um1,cantidadcon,um2,tipo,presentacion,precio,estante,nivel,codOC,horainicio,horafinal,fecCreate FROM productos;";
        $res = $this->conn->ConsultaCon($sql);

        return $res;
        $mysqli->close();
    }
    
}
