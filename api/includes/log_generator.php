<?php 
// $msg_log = "El usuario con ID 45 ha iniciado sesión.";

const LOGPATH = __DIR__.'/../logs/';

function log_generator($log_msg,$filename = 'actividad') : void {
    if (!is_dir(LOGPATH)) {
        mkdir(LOGPATH, 0777, true); // Crea la carpeta si no existe
    }
    // El parámetro '3' indica que queremos escribir en un archivo específico
    error_log($log_msg . PHP_EOL, 3, LOGPATH.$filename.".log");
    // PHP_EOL: Es una constante que añade el salto de línea correcto según el sistema operativo (Windows o Linux).
}
?>