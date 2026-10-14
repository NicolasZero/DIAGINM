<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumento de Diagnostico</title>
    <!-- icon -->
    <link rel="icon" href="/web/assets/img/logo_Inamujer.png" type="image/x-png">

    <!-- CSS -->
    <link rel="stylesheet" href="/web/assets/css/loader.css">
    <link rel="stylesheet" href="/web/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/web/assets/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/web/assets/css/bootstrap/tooltip.css">
    <link rel="stylesheet" href="/web/assets/css/main.css">
    <link rel="stylesheet" href="/web/assets/css/register.css">

    <!-- JS -->
    <script src="/web/assets/js/helpers/jspdf_v2.5.1.min.js"></script>
    <script src="/web/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/web/assets/js/helpers/jquery.min.js"></script>
    <script src="/web/assets/js/controllers/form.js" type="module"></script>

    <script>
        if (!localStorage.getItem('inm-user')) {
            location.replace("/web")
        } else {
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
    <div class="loader-page"></div>

    <?php
    include_once '../../assets/php/header.php';
    include_once '../../assets/php/nav.php';
    ?>

    <main>
        <form id="myform" class="register">
            <div id="alert" class="msg msg-success text-center fs-5 d-none" role="alert">
                Registro realizado con exito
            </div>

            <fieldset>
                <h2 class="text-center">COORDINACIÓN ESTADAL</h2>
                <h3 class="mt-4 fs-5">Responsable de la Coordinación Estadal</h3>

                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Nombre(s):
                            <input type="text" class="input-brutus" name="nombre" maxlength="40" required
                                title="Solo letras" pattern="[A-Za-z\s]+">
                        </label>
                        <span class="validation-msg" role="alert">Este campo es requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Apellido(s):
                            <input type="text" class="input-brutus" name="apellido" maxlength="40" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Cédula de identidad:
                            <input type="text" class="input-brutus" name="cedula" maxlength="40" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="px-2">Teléfono:
                            <input type="text" class="input-brutus" name="telefono" maxlength="12" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="px-2">
                            Correo Electrónico:
                            <input type="text" class="input-brutus" name="correo" maxlength="40" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>
                </div>

                <hr>
                <h3 class="mt-4 fs-5">Ubicación Administrativa</h3>

                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Avenida o Calle:
                            <input type="text" class="input-brutus" maxlength="100" name="avenida_calle" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Edificio, Casa o Sede:
                            <input type="text" class="input-brutus" maxlength="100" name="edifi_casa_sede" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Nombre del Edificio, Casa o sede:
                            <input type="text" class="input-brutus" maxlength="100" name="nombre_edifi_casa_sede"
                                required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Piso N°:
                            <input type="text" class="input-brutus" pattern="^[0-9]\d*$" name="num_piso" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Teléfono:
                            <input type="text" class="input-brutus" pattern="^[0-9]\d*$"
                                name="telefono_infraestructura">
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="px-2">

                            <label for="select_state">Estado:</label>
                            <select class="input-brutus select-brutus" id="select_state" name="estado_id" required>
                                <option selected value="">Seleccione</option>
                                <option value="DISTRITO CAPITAL">DISTRITO CAPITAL</option>
                                <option value="ANZOATEGUI">ANZOATEGUI</option>
                                <option value="APURE">APURE</option>
                                <option value="ARAGUA">ARAGUA</option>
                                <option value="BARINAS">BARINAS</option>
                                <option value="BOLIVAR">BOLIVAR</option>
                                <option value="CARABOBO">CARABOBO</option>
                                <option value="COJEDES">COJEDES</option>
                                <option value="FALCON">FALCON</option>
                                <option value="GUARICO">GUARICO</option>
                                <option value="LARA">LARA</option>
                                <option value="MERIDA">MERIDA</option>
                                <option value="MIRANDA">MIRANDA</option>
                                <option value="MONAGAS">MONAGAS</option>
                                <option value="NUEVA ESPARTA">NUEVA ESPARTA</option>
                                <option value="PORTUGUESA">PORTUGUESA</option>
                                <option value="SUCRE">SUCRE</option>
                                <option value="TACHIRA">TACHIRA</option>
                                <option value="TRUJILLO">TRUJILLO</option>
                                <option value="YARACUY">YARACUY</option>
                                <option value="ZULIA">ZULIA</option>
                                <option value="DELTA AMACURO">DELTA AMACURO</option>
                                <option value="GUAIRA">GUAIRA</option>
                            </select>
                        </div>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Municipio:
                            <input type="text" class="input-brutus" id="input2-7" name="municipio_id" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Ciudad:
                            <input type="text" class="input-brutus" id="input2-8" name="ciudad" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="px-2">Parroquia:
                            <input type="text" class="input-brutus" id="input2-9" name="parroquia_id" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label class="px-2">Zona Postal:
                            <input type="text" class="input-brutus" id="input2-10" name="zona_postal" required>
                        </label>
                        <span class="validation-msg">Campo requerido</span>
                    </div>

                </div>
            </fieldset>

            <fieldset>
                <!-- ----- DATOS Y CONDICIONES DE LA INFRAESTRUCTURA ----- -->
                <h2 class="text-center">DATOS Y CONDICIONES DE LA INFRAESTRUCTURA</h2>
                <h3 class="mt-4 fs-5">Infraestructura</h3>

                <div class="row fs-xs">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <label for="select-sede" class="w-auto">Sede</label>

                        <select required class="input-brutus mx-4" id="select-sede" name="sede_id">
                            <option selected value="">Seleccione</option>
                            <option value="Compartida">Compartida</option>
                            <option value="INAMUJER">INAMUJER</option>
                            <option value="CAFIM">CAFIM</option>
                            <option value="Casa de abrigo">Casa de abrigo</option>
                            <option value="UAIM">UAIM</option>
                            <option value="Defensoria">Defensoria</option>
                        </select>
                    </div>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="propia" name="propia">
                            <label class="form-check-label" for="propia">PROPIA</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" name="propia_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center ">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="alquilada"
                                name="alquilada">
                            <label class="form-check-label" for="alquilada">ALQUILADA</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" name="alquilada_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center ">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input3-4"
                                name="apoyo_interinstitucional">
                            <label class="form-check-label" for="input3-4">APOYO INTERISNTITUCIONAL</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus"
                                    name="apoyo_interinstitucional_dec">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center ">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input3-5" name="techos">
                            <label class="form-check-label" for="input3-5">TECHOS</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" name="techos_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center ">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input3-6" name="paredes">
                            <label class="form-check-label" for="input3-6">PAREDES</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" name="paredes_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center ">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input3-7" name="pisos">
                            <label class="form-check-label" for="input3-7">PISOS</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" name="pisos_desc">
                            </label>
                        </div>
                    </section>

                    <section class="px-5 col-lg-12 mb-3">
                        <label>OTROS (Especifique)
                            <textarea name="otra_infraestructura" maxlength="150" class="input-brutus w-100"></textarea>
                        </label>
                    </section>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- Servicios Publicos ----- -->
                <h2 class="text-center">SERVICIOS PÚBLICOS</h2>

                <div class="row fs-xs">
                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input4-1"
                                name="electricidad">
                            <label class="form-check-label" for="input4-1">ELECTRICIDAD (Luz)</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" id="input4-1a"
                                    name="electricidad_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input4-2" name="agua">
                            <label class="form-check-label" for="input4-2">AGUA</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" id="input4-2a" name="agua_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input4-3" name="telefonia">
                            <label class="form-check-label" for="input4-3">TELÉFONO</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" id="input4-3a"
                                    name="telefonia_desc">
                            </label>
                        </div>
                    </section>

                    <section class="col-lg-6 py-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-indigo" type="checkbox" id="input4-4" name="internet">
                            <label class="form-check-label" for="input4-4">INTERNET</label>
                        </div>

                        <div class="w-full">
                            <label>Descripción de la condición
                                <input type="text" maxlength="150" class="input-brutus" id="input4-4a"
                                    name="internet_desc">
                            </label>
                        </div>
                    </section>

                    <section class="px-5 col-lg-12 mb-3">
                        <label>OTROS (Especifique)
                            <textarea name="otro_servicio_publico" id="input4-5" maxlength="150"
                                class="input-brutus w-100"></textarea>
                        </label>
                    </section>
                </div>

            </fieldset>

            <!-- ----- BIENES NACIONALES ----- -->
            <fieldset>
                <h2 class="text-center">BIENES NACIONALES</h2>

                <div class="row py-3">
                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">01</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-1" name="num_bien1">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-1a" name="tipo_bien1">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">02</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-2" name="num_bien2">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-2a" name="tipo_bien2">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">03</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-3" name="num_bien3">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-3a" name="tipo_bien3">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">04</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-4" name="num_bien4">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-4a" name="tipo_bien4">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">05</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-5" name="num_bien5">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-5a" name="tipo_bien5">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">06</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-6" name="num_bien6">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-6a" name="tipo_bien6">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">07</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-7" name="num_bien7">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-7a" name="tipo_bien7">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">08</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-8" name="num_bien8">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-8a" name="tipo_bien8">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">09</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-9" name="num_bien9">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-9a" name="tipo_bien9">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">10</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-10" name="num_bien10">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-10a" name="tipo_bien10">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">11</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-11" name="num_bien11">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-11a" name="tipo_bien11">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">12</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-12" name="num_bien12">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-12a" name="tipo_bien12">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">13</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-13" name="num_bien13">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-13a" name="tipo_bien13">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">14</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-14" name="num_bien14">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-14a" name="tipo_bien14">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">15</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-15" name="num_bien15">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-15a" name="tipo_bien15">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">16</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-16" name="num_bien16">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-16a" name="tipo_bien16">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">17</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-17" name="num_bien17">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-17a" name="tipo_bien17">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">18</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-18" name="num_bien18">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-18a" name="tipo_bien18">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">19</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-19" name="num_bien19">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-19a" name="tipo_bien19">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6 row">
                        <div class="col-xs-12 col-lg-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">20</h1>
                        </div>
                        <div class="col-xs-6 col-lg-5 mb-3">
                            <label>N° de bien:
                                <input type="text" class="input-brutus" id="input5-20" name="num_bien20">
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-6 mb-3">
                            <label>Tipo:
                                <input type="text" class="input-brutus" id="input5-20a" name="tipo_bien20">
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- VEHÍCULO ASIGNADO ----- -->
                <h2 class="text-center">VEHÍCULO ASIGNADO</h2>
                <h3 class="mt-4 fs-5">Automóvil</h3>

                <div class="mb-3">
                    <div class="row justify-content-center align-items-center">
                        <div class="form-check col-xs-6 col-lg-2 ms-4">
                            <input class="form-check-input check-indigo" type="checkbox" id="automovil"
                                name="automovil">
                            <label class="form-check-label" for="automovil">
                                AUTOMÓVIL
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-4 mb-3 mt-2">
                            <label>Cantidad N°:
                                <input type="text" class="input-brutus" pattern="^[0-9]\d*$" id="cant_auto"
                                    name="cant_auto">
                            </label>
                            <span class="validation-msg">Solo se permiten números</span>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">1</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-1" name="num_placa_auto1">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-2" name="modelo_auto1">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-3"
                                    name="condiciones_auto1" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">2</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-4" name="num_placa_auto2">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-5" name="modelo_auto2">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-6"
                                    name="condiciones_auto2" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">3</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-7" name="num_placa_auto3">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-8" name="modelo_auto3">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-9"
                                    name="condiciones_auto3" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">4</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-10" name="num_placa_auto4">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-11" name="modelo_auto4">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-12"
                                    name="condiciones_auto4" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">5</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-13" name="num_placa_auto5">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-14" name="modelo_auto5">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-15"
                                    name="condiciones_auto5" rows="2"></textarea>
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <h3 class="mt-4 fs-5">Autobus</h3>

                <div class="mb-3">
                    <div class="row justify-content-center align-items-center">
                        <div class="form-check col-xs-6 col-lg-2 ms-4 ">
                            <input class="form-check-input check-indigo" type="checkbox" id="autobus" name="autobus">
                            <label class="form-check-label" for="autobus">
                                AUTOBUS
                            </label>
                        </div>
                        <div class="col-xs-6 col-lg-4 mb-3 mt-2">
                            <label>Cantidad N°:
                                <input type="text" class="input-brutus" pattern="^[0-9]\d*$" id="cant_bus"
                                    name="cant_bus">
                            </label>
                            <span class="validation-msg">Solo se permiten números</span>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">1</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-16" name="num_placa_bus1">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-17" name="modelo_bus1">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-18"
                                    name="condiciones_bus1" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">2</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-19" name="num_placa_bus2">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-20" name="modelo_bus2">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-21"
                                    name="condiciones_bus2" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">3</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-22" name="num_placa_bus3">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-23" name="modelo_bus3">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-24"
                                    name="condiciones_bus3" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">4</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-25" name="num_placa_bus4">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-26" name="modelo_bus4">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-27"
                                    name="condiciones_bus4" rows="2"></textarea>
                            </label>
                        </div>
                    </div>

                    <div class="row justify-content-center pt-3">
                        <div class="col-1 text-center align-self-center px-1">
                            <h1 class="text-indigo">5</h1>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>N° de Placa:
                                <input type="text" class="input-brutus" id="input27-28" name="num_placa_bus5">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-3 mb-3">
                            <label>Modelo:
                                <input type="text" class="input-brutus" id="input27-29" name="modelo_bus5">
                            </label>
                        </div>
                        <div class="col-xs-1 col-lg-5 mb-3">
                            <label>Condiciones:
                                <textarea class="input-brutus w-100" maxlength="250" id="input27-30"
                                    name="condiciones_bus5" rows="2"></textarea>
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <h3 class="mt-4 fs-5">Otros</h3>

                <div class="row justify-content-center pb-3">
                    <div class="mb-3 col-lg-3">
                        <label>OTROS (Especifique):
                            <input type="text" class="input-brutus" id="input27-31" name="otros">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cantidad N°:
                            <input type="text" class="input-brutus" id="input27-32" pattern="^[0-9]\d*$"
                                name="cant_otro">
                        </label>
                        <span class="validation-msg">Solo se permiten números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>N° de Placa:
                            <input type="text" class="input-brutus" id="input27-33" name="num_placa_otro">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Modelo:
                            <input type="text" class="input-brutus" id="input27-34" name="modelo_otro">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label>Condiciones:
                            <textarea class="input-brutus w-100" maxlength="250" id="input27-35" name="condiciones_otro"
                                rows="3"></textarea>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- TALENTO HUMANO ----- -->
                <h2 class="text-center">TALENTO HUMANO</h2>
                <h3 class="mt-4 fs-5">Mujeres</h3>
                <div class="row justify-content-center pt-3">
                    <div class="mb-3 col-lg-3">
                        <label>Cantidad de mujeres:
                            <input type="text" class="input-brutus" id="input27-36" pattern="^[0-9]\d*$"
                                name="cant_mujeres" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Mujeres activas:
                            <input type="text" class="input-brutus" id="input27-37" pattern="^[0-9]\d*$"
                                name="mujeres_activas" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Mujeres de reposo:
                            <input type="text" class="input-brutus" id="input27-38" pattern="^[0-9]\d*$"
                                name="mujeres_reposo" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Mujeres en vacaciones:
                            <input type="text" class="input-brutus" id="input27-39" pattern="^[0-9]\d*$"
                                name="mujeres_vacaciones" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                </div>

                <hr class="my-4">
                <h3 class="mt-4 fs-5">Hombres</h3>

                <div class="row justify-content-center py-3">
                    <div class="mb-3 col-lg-3">
                        <label>Cantidad de hombres:
                            <input type="text" class="input-brutus" id="input27-40" pattern="^[0-9]\d*$"
                                name="cant_hombres" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Hombres activos:
                            <input type="text" class="input-brutus" id="input27-41" pattern="^[0-9]\d*$"
                                name="hombres_activos" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Hombres de reposo:
                            <input type="text" class="input-brutus" id="input27-42" pattern="^[0-9]\d*$"
                                name="hombres_reposo" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Hombres en vacaciones:
                            <input type="text" class="input-brutus" id="input27-43" pattern="^[0-9]\d*$"
                                name="hombres_vacaciones" required>
                        </label>
                        <span class="validation-msg">Campo requerido y solo números</span>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- EQUIPOS MÉDICOS ----- -->
                <h2 class="text-center">EQUIPOS MÉDICOS</h2>

                <div class="row py-3">
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">01</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 1:
                                <input type="text" class="input-brutus" id="input22-1" name="equipo_medico1">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">02</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 2:
                                <input type="text" class="input-brutus" id="input22-2" name="equipo_medico2">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">03</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 3:
                                <input type="text" class="input-brutus" id="input22-3" name="equipo_medico3">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">04</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 4:
                                <input type="text" class="input-brutus" id="input22-4" name="equipo_medico4">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">05</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 5:
                                <input type="text" class="input-brutus" id="input22-5" name="equipo_medico5">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">06</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 6:
                                <input type="text" class="input-brutus" id="input22-6" name="equipo_medico6">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">07</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 7:
                                <input type="text" class="input-brutus" id="input22-7" name="equipo_medico7">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">08</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 8:
                                <input type="text" class="input-brutus" id="input22-8" name="equipo_medico8">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">09</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 9:
                                <input type="text" class="input-brutus" id="input22-9" name="equipo_medico9">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 row align-items-center mb-3">
                        <div class="col-2 text-center align-self-center px-1">
                            <h3 class="text-indigo mb-0">10</h3>
                        </div>
                        <div class="col-10">
                            <label>Equipo médico 10:
                                <input type="text" class="input-brutus" id="input22-10" name="equipo_medico10">
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- OBSERVACIONES Y RECOMENDACIONES ----- -->
                <h2 class="text-center">OBSERVACIONES Y RECOMENDACIONES</h2>

                <div class="py-3">
                    <div class="mb-3 col-lg-12">
                        <label>OBSERVACIÓN:
                            <textarea class="input-brutus w-100" maxlength="700" id="observacion" name="observacion"
                                rows="5"></textarea>
                        </label>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label>RECOMENDACIONES:
                            <textarea class="input-brutus w-100" id="recomendaciones" maxlength="700"
                                name="recomendaciones" rows="5"></textarea>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <!-- ----- TESTIGOS Y ENLACE ----- -->
                <h2 class="text-center">TESTIGOS Y ENLACE</h2>

                <h3 class="mt-4 fs-5">TESTIGO N° 1</h3>
                <div class="row justify-content-center py-3">
                    <div class="mb-3 col-lg-3">
                        <label>Nombre(s):
                            <input type="text" class="input-brutus" id="input_nombre_testigo1" name="nombre_testigo1">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Apellido(s):
                            <input type="text" class="input-brutus" id="input_apellido_testigo1"
                                name="apellido_testigo1">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cédula:
                            <input type="text" class="input-brutus" id="input_cedula_testigo1" name="cedula_testigo1">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cargo:
                            <input type="text" class="input-brutus" id="input_cargo_testigo1" name="cargo_testigo1">
                        </label>
                    </div>
                </div>

                <hr class="my-4">
                <h3 class="mt-4 fs-5">TESTIGO N° 2</h3>
                <div class="row justify-content-center py-3">
                    <div class="mb-3 col-lg-3">
                        <label>Nombre(s):
                            <input type="text" class="input-brutus" id="input_nombre_testigo2" name="nombre_testigo2">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Apellido(s):
                            <input type="text" class="input-brutus" id="input_apellido_testigo2"
                                name="apellido_testigo2">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cédula:
                            <input type="text" class="input-brutus" id="input_cedula_testigo2" name="cedula_testigo2">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cargo:
                            <input type="text" class="input-brutus" id="input_cargo_testigo2" name="cargo_testigo2">
                        </label>
                    </div>
                </div>

                <hr class="my-4">
                <h3 class="mt-4 fs-5">ENLACE INAMUJER</h3>
                <div class="row justify-content-center py-3">
                    <div class="mb-3 col-lg-3">
                        <label>Nombre(s):
                            <input type="text" class="input-brutus" id="input_nombre_enlace" name="nombre_enlace_inm">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Apellido(s):
                            <input type="text" class="input-brutus" id="input_apellido_enlace"
                                name="apellido_enlace_inm">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cédula:
                            <input type="text" class="input-brutus" id="input_cedula_enlace" name="cedula_enlace_inm">
                        </label>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label>Cargo:
                            <input type="text" class="input-brutus" id="input_cargo_enlace" name="cargo_enlace_inm">
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="p-3 d-flex justify-content-end">
                <button type="submit" class="btn-brutus btn-indigo continue"><i class="bi-check-lg"></i> Enviar</button>
            </div>
        </form>
    </main>

    <?php include_once '../../assets/php/footer.php'; ?>

    <script>
        document.querySelector('.registro').classList.add('active')

        const user = JSON.parse(localStorage.getItem('inm-user'))

        if (user.rol == "administrador") document.querySelector('#link-tablas').classList.remove('d-none');
    </script>
</body>

</html>