<?php
    const VALOR = [
        'a' => 1,
        'b' => 2,
        'c' => 3
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo json_encode(VALOR);
        header('HTTP/1.1 201 OK');
    }
?>