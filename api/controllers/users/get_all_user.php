<?php
    require_once(__DIR__."/../"."/../".'db/conexion.php');
    
    function get_all_user (){

        $obj = new Conexion();
        $conexion = $obj->Conectar();
    
        $consulta = "SELECT * FROM users";
        $resultado = $conexion->prepare($consulta); //prepare("query",[value])
        $resultado->execute();
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }
    
?>