<?php
    // GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo json_encode(VALOR);
        header('HTTP/1.1 201 OK');
    }

    // POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # code...
    }

    // DELETE
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        # code...
    }

    // PATCH
    if ($_SERVER['REQUEST_METHOD'] == 'PATCH') {
        # code...
    }