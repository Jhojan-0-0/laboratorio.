<?php
class ValidarModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Guardar una validación en la tabla `validacion`
     * @param int $idproducto
     * @param int $encontrado (0|1)
     * @param int $completo (0|1)
     * @param string|null $obs
     * @return bool
     */
    function Guardar($idproducto, $encontrado, $completo, $obs = null)
    {
        // Escapar valores para evitar errores con comillas
        $idproducto = intval($idproducto);
        $encontrado = intval($encontrado);
        $completo = intval($completo);
        $obs_esc = ($obs !== null) ? $this->conn->conn->real_escape_string($obs) : '';

        $sql = "INSERT INTO validacion (idproducto, encontrado, completo, obs) VALUES ($idproducto, $encontrado, $completo, '" . $obs_esc . "');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    public function ListarQuimico(){
        $sql = "SELECT idproducto,nombre,marca,clasificacion,fecFabricacion,fecVencimiento,numlote,fecAdquisicion,cantidadsin,um1,cantidadcon,um2,tipo,presentacion,precio,estante,nivel,codOC,horainicio,horafinal,fecCreate FROM productos;";
        $res = $this->conn->ConsultaCon($sql);

        return $res;
        $mysqli->close();
    }
    
}
