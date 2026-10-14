<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumento de Diagnostico</title>
    <!-- icon -->
    <link rel="icon" href="/web/assets/img/logo_Inamujer.png" type="image/x-png">

    <!-- loader -->
    <link rel="stylesheet" href="/web/assets/css/loader.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/web/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/web/assets/icons/bootstrap-icons.min.css">

    <!-- datatables -->
    <link rel="stylesheet" href="/web/assets/css/bootstrap/datatables.min.css">
    <link rel="stylesheet" href="/web/assets/css/bootstrap/datatables.buttons.css">

    <link rel="stylesheet" href="/web/assets/css/main.css">
    <link rel="stylesheet" href="/web/assets/css/table.css">

    <!-- JS -->
    <script src="/web/assets/js/helpers/jspdf_v2.5.1.min.js"></script>
    <script src="/web/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/web/assets/js/helpers/jquery.min.js"></script>

    <!-- datatables -->
    <script src="/web/assets/js/bootstrap/datatables.min.js"></script>
    <script src="/web/assets/js/bootstrap/dataTables.buttons.js"></script>
    <script src="/web/assets/js/bootstrap/buttons.dataTables.js"></script>
    <script src="/web/assets/js/bootstrap/datatable.jszip.v3.10.1.min.js"></script>
    <script src="/web/assets/js/bootstrap/datatable.html5.v3.2.0.js"></script>

    <script>
        if (!localStorage.getItem('inm-user')) {
            location.replace("/web/")
        } else {
            const user = JSON.parse(localStorage.getItem('inm-user'))
            if (user.rol != "administrador") {
                location.replace("/web/registro")
            }
            $(window).on('load', function () {
                $(".loader-page").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            });
        }
    </script>
</head>

<body class="bg-indigo text-black">
    <span class="loader-page"></span>

    <?php
    $ruta = '../../';
    include_once '../../assets/php/header.php';
    include_once '../../assets/php/nav.php';
    ?>

    <main>
        <section class="table-box">
            <h2 class="px-3 pt-3 m-0 text-center fw-normal">Tabla de registros generales</h2>

            <div class="row mx-3 py-3 overflow-auto">
                <table id="example" class="table table-hover"></table>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php include_once '../../assets/php/footer.php'; ?>

    <script>
        document.querySelector('.ver-general').classList.add('active')
    </script>

    <script type="module">
        import {
            getData
        } from "/web/assets/js/controllers/ver.registro.js";

        $(window).on('load', function () {
            getData()
        });

        document.querySelector('.ver-general').classList.add('active')

        const user = JSON.parse(localStorage.getItem('inm-user'))

        if (user.rol == "administrador") document.querySelector('#link-tablas').classList.remove('d-none');
    </script>
</body>

</html>