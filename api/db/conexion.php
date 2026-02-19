<?php
include __DIR__.'/../config/db.php';
require_once __DIR__.'/../includes/log_generator.php';


if (DB != 'mysql' && DB != 'pgsql') {
    die('Configuracion incorrecta');
}

class conexion {
    function Conectar(){
        try {
            $conexion = new PDO(DB.":host=".DBHOST.";port=5432;dbname=".DBNAME,DBUSER,DBPASS);
            // $conexion = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
            return $conexion;
        } catch (Exception $error) {
            log_generator($error->getMessage());
            die("Error al conectarse");
        }
    }
}