<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumento de Diagnostico</title>
    <!-- icon -->
    <link rel="icon" href="../../assets/img/logo_Inamujer.png" type="image/x-png">

    <!-- loader -->
    <link rel="stylesheet" href="../../assets/css/loader.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/table.css">
    <!-- datatables -->
    <link href="../../assets/css/bootstrap/datatables.min.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap/datatables.buttons.css" rel="stylesheet">

    <!-- JS -->
    <script src="../../assets/js/helpers/jspdf_v2.5.1.min.js"></script>
    <script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="../../assets/js/helpers/jquery.min.js"></script>
    <!-- datatables -->
    <script src="../../assets/js/bootstrap/datatables.min.js"></script>
    <script src="../../assets/js/bootstrap/dataTables.buttons.js"></script>
    <script src="../../assets/js/bootstrap/buttons.dataTables.js"></script>


    <!-- <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script> -->
    <script src="../../assets/js/bootstrap/datatable.jszip.v3.10.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script> -->
    <script src="../../assets/js/bootstrap/datatable.html5.v3.2.0.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script> -->


    <script>
        const nologin = () => {
            location.replace("../../")
        }

        if (!localStorage.getItem('inm-user')) {
            nologin()
        } else {
            const user = JSON.parse(localStorage.getItem('inm-user'))
            if (user.rol != "administrador") {
                location.replace("../registro")
            }
            // console.log(user.rol);
            $(window).on('load', function () {
                $(".loader-page").css({ visibility: "hidden", opacity: "0" })
            });
        }
    </script>
</head>

<body class="bg-indigo text-black">
    <div class="loader-page"></div>
    <!-- header -->
    <?php $ruta='../../'; include_once '../../assets/php/header.php'; ?>

    <!-- navbar -->
    <?php $ruta='../../'; include_once '../../assets/php/nav.php'; ?>

    <main>
        <section class="table-box">
            <h2 class="px-3 py-2 text-center fw-light">Tabla de registros generales</h2>
            <!-- <h5 class="bg-secondary text-white px-3 py-1 text-center">Responsable de la Coordinación Estadal</h5> -->
    
            <div class="row mx-3 py-3 overflow-auto">
                <table id="example" class="table table-hover"></table>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php include_once '../../assets/php/footer.php'; ?>

    <script type="module">
        import { getData } from "../../assets/js/controllers/ver.registro.js";

        $(window).on('load', function () {
            getData()
        });        
    </script>
</body>

</html>