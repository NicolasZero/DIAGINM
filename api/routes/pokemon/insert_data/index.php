<?php
    if (
        $_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_POST['name'])
        && isset($_POST['type1'])
    ) {
        $name = $_POST['name'];
        $type1 = $_POST['type1'];
        $type2 = isset($_POST['type2']) ? $_POST['type2'] : "";

        $type = $type2 == "" ? $type1 : "$type1/$type2";
        
        header("HTTP/1.1 201 El pokemon: $name del tipo $type se registro con exito");
    }else{
        header("HTTP/1.1 409 Ocurrio un error al registrar el pokemon");
    }
?>