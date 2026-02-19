<?php
    
    // GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once '../../controllers/users/get_all_user.php';
        $datos = get_all_user();
        echo json_encode($datos);
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