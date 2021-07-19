<?php
    $base_url="https://www.proyectodomus.com/HoyosLuque";
    //$base_url="http://localhost/HoyosLuqueWEB"; 
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Hoyos Luque - Inmobiliaria</title>
        <meta charset="utf-8">
        <meta name="description" content="Empresa inmobiliaria Hoyos Luque, dedicada a la gerencia de proyectos de construcción, administrar contratos de arriendo y comercialización de inmubles.">
        <meta name="author" content="Juan David Calderón Jiménez">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Mis CSS -->
        <link rel="stylesheet" href="<?php echo $base_url ?>/css/style.css">
        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Favicon -->
        <link rel="icon" href="<?php echo $base_url?>/assets/favicon.png" type="image/png" />
        <!-- AXIOS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>

    <body id="main-content" class="new-nav-bar">
        <header class="NavBar">
            <nav class="px-5 navbar navbar-expand-xl navbar-light bg-white fixed-top">
                <a class="Logo navbar-brand pl-lg-5" href="<?php echo $base_url?>">
                    <img class="img-fluid" src="<?php echo $base_url ?>/assets/logo.svg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavBar" aria-controls="MainNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pr-5" id="MainNavBar">
                    <ul class="navbar-nav ml-auto">
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/quienes-somos">QUIÉNES SOMOS</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/busqueda/ventas">VENTA</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/busqueda/arriendo">ARRIENDO</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/inquilinos">INQUILINOS</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/propietarios">PROPIETARIOS</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/#Contacto">CONTACTO</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="<?php echo $base_url?>/pqrsf">PQRSF</a>
                        </li>
                        <li class="mx-4 nav-item">
                            <a class="nav-link" href="http://199.189.87.44/hoyosluque/">COLABORADORES</a>
                        </li>
                    </ul>
                </div>
            </nav> 
        </header>