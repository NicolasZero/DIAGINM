<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- icon -->
    <link rel="icon" href="./assets/img/logo_Inamujer.png" type="image/x-png">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/loader.css">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/login.css">

    <!-- JS -->
    <script src="./assets/js/helpers/jquery.min.js"></script>
    <script src="./assets/js/helpers/jspdf_v2.5.1.min.js"></script>
    <script src="./assets/js/bootstrap/bootstrap.min.js"></script>

    <script type="module" src="./assets/js/controllers/login.js"></script>

    <script>
        if (localStorage.getItem('inm-user')) {
            location.href = './page/registro'
        }
    </script>
</head>

<body class="bg-indigo text-black">
    <?php include_once './assets/php/header.php'; ?>

    <main class="mx-auto p-0 py-3">
        <section id="alert" class="alert alert-danger text-center fs-5 d-none" role="alert"></section>
        <form id="login">

            <div>
                <label for="user" class="form-label text-indigo fw-bold user-select-none">Usuario</label>
                <input type="text" class="form-control input-brutus" id="user">
            </div>

            <div>
                <label for="pass" class="form-label text-indigo fw-bold user-select-none">Contraseña</label>
                <div class="d-flex flex-nowrap align-items-center">
                    <input type="password" class="form-control input-brutus me-2" id="pass">
                    <span class="btn-brutus cursor-pointer" id="show">
                        <i class="eye bi bi-eye-fill text-indigo"></i>
                    </span>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input check-indigo" id="check" value="hola">
                <label class="form-check-label cursor-pointer user-select-none" for="check">Mantener sesión activa</label>
            </div>

            <button id="btn-submit" type="submit" class="btn-brutus btn-indigo">Ingresar</button>
        </form>
    </main>

    <?php include_once './assets/php/footer.php'; ?>
</body>

</html>