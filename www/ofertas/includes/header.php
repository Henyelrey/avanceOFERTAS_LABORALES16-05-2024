<?php
include_once("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="http://localhost/ofertas/plantilla/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Ofertas laborales</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <!-- preguntamos si la sesion existe, solo en tal caso mostramos el texto bienvenido -->
        <?php
        if (isset($_SESSION["S_USUARIO"])) { ?>

            <div class="text-warning">
                <?php
                echo 'welcome ' . $_SESSION["S_USUARIO"];
                ?>
            </div>

        <?php } ?>
        <!-- Navbar-->
        <!-- preguntamos si la sesion existe, solo en tal caso mostramos el el menu de un usuario "logeado" -->
        <?php
        if (isset($_SESSION["S_USUARIO"])) { ?>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <!-- para cerrar sesion -->
                        <li><a class="dropdown-item" href="<?= RUTA_GENERAL; ?>source/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= RUTA_GENERAL; ?>index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            inicio
                        </a>
                    </div>
                    <!-- preguntamos si la sesion no existe, pues solo en ese caso se debe mostrar la opcion de ingresar -->
                    <?php
                    if (!isset($_SESSION["S_USUARIO"])) { ?>
                        <div class="nav">

                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                ingresar
                            </a>
                        </div>
                    <?php } ?>
                    <!-- aqui inician la opcines del sistema -->
                    <div class="nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Ver ofertas
                        </a>
                    </div>

                    <div class="nav">
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Registrarse
                        </a>
                    </div>

                    <!-- EMPRESA -->
                    <?php
                    if (isset($_SESSION["S_USUARIO"]) && $_SESSION["S_ROL"] == 1) { ?>
                        <div>
                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Crear oferta laboral
                                </a>
                            </div>


                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    buscar postulantes
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Administrar ofertas
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Seleccionar postulantes
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- FIN EMPRESA -->


                    <!-- admin -->
                    <?php
                    if (isset($_SESSION["S_USUARIO"]) && $_SESSION["S_ROL"] == 2) { ?>
                        <div>
                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Crear Usuario
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Crear postulante
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="<?=RUTA_GENERAL;?>source/admin/listar_empresas.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Listar empresas
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Listar ofertas
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- fin admin -->

                    <!-- postulante -->
                    <?php
                    if (isset($_SESSION["S_USUARIO"]) && $_SESSION["S_ROL"] == 3) { ?>
                        <div>
                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Buscar ofertas
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Postular a oferta
                                </a>
                            </div>

                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    Mis postulaciones
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- fin postulante -->
                    
                    <?php
                    if (isset($_SESSION["S_USUARIO"]) && $_SESSION["S_ROL"] == 4) { ?>
                        
                            <div class="nav">
                                <a class="nav-link" href="">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                    reallizar seguimiento
                                </a>
                            </div>

                            
                        
                    <?php } ?>

                    <!-- aqui finaliza las opciones de nuestro sistema -->

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
