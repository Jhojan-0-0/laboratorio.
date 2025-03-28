<?php

class DashboardModel extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function bitacora($idpersonal,$ip,$fecha,$horainicio)
    {
        $sql = "INSERT INTO bitacora VALUES (NULL, $idpersonal,'$ip','$fecha','$horainicio',null,0,0);";
        $this->conn->ConsultaSin($sql);
        
    }
}



?>