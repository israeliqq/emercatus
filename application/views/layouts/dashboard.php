<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> B2B - Proyecto Usuarios Zofri</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>tools/dash/img/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/normalize.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/meanmenu.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/educate-custon-icon.css">

<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/morrisjs/morris.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/scrollbar/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/metisMenu/metisMenu-vertical.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/calendar/fullcalendar.print.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/form/all-type-forms.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/data-table/bootstrap-table.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/data-table/bootstrap-editable.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/dropzone/dropzone.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>tools/dash/css/responsive.css">
<script src="<?php echo base_url();?>tools/dash/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>tools/dash/img/logo/logo.png" alt="" /></a>
            <strong><a href="index.html"><img src="<?php echo base_url();?>tools/dash/img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a title="Landing Page" href="<?php echo base_url();?>vendedor/resumen" aria-expanded="false">
                            <i class="fab fa-fort-awesome"></i> <span class="mini-click-non"> Resumen</span>
                        </a>
                    </li>
                    <li>
                        <a title="Landing Page" href="<?php echo base_url();?>vendedor/facturacion" aria-expanded="false">
                            <i class="fas fa-file-invoice-dollar"></i> <span class="mini-click-non"> &nbspFacturación</span>
                        </a>                    
                    </li>
                    <li><a title="Landing Page" href="<?php echo base_url();?>admin/mensajes" aria-expanded="false">
                            <i class="fas fa-comments"></i><span class="mini-click-non"> &nbspMensajes</span>
                        </a>
                    </li>
                    <li>
                        <a title="Landing Page" href="<?php echo base_url();?>vendedor/reputacion" aria-expanded="false">
                        <i class="far fa-grin-stars"></i> <span class="mini-click-non"> Reputación</span>
                        </a>                    
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo base_url();?>vendedor/resumen" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i> <span class="mini-click-non"> Compras</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="<?php echo base_url();?>comprador/mis_compras"><span class="mini-sub-pro">Mis Compras</span></a></li>
                            <li><a title="Add Professor" href="<?php echo base_url();?>comprador/favoritos"><span class="mini-sub-pro">Favoritos</span></a></li>
                            <li><a title="Edit Professor" href="<?php echo base_url();?>comprador/orden_compra"><span class="mini-sub-pro">Ordenes de Compra</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                            <i class="fas fa-hand-holding-usd"></i></i> <span class="mini-click-non"> &nbspVentas</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="<?php echo base_url();?>vendedor/ingresar_producto"><span class="mini-sub-pro">Publicar Producto</span></a></li>
                            <li><a title="Add Courses" href="<?php echo base_url();?>vendedor/listar_productos"><span class="mini-sub-pro">Ver Productos</span></a></li>
                            <li><a title="Edit Courses" href="<?php echo base_url();?>vendedor/orden_compra"><span class="mini-sub-pro">Ver Ordenes de Compra</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                            <i class="fas fa-users-cog"></i> <span class="mini-click-non"> &nbspConfiguración</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="<?php echo base_url();?>vendedor/actualizar_datos"><span class="mini-sub-pro">Mis Datos</span></a></li>
                            <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Reclamos</span></a></li>
                            <li><a title="Edit Library" href="<?php echo base_url();?>admin/ayuda"><span class="mini-sub-pro">Ayuda</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->


<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>tools/dash/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>comprador" class="nav-link">Tienda</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url();?>vendedor/reputación" class="nav-link">Reputación</a>
                                            </li>
                                            <li class="nav-item dropdown res-dis-nn">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Productos <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                <div role="menu" class="dropdown-menu animated zoomIn">
                                                    <a href="<?php echo base_url();?>vendedor/orden_compra" class="dropdown-item">Orden Compra</a>
                                                    <a href="<?php echo base_url();?>vendedor/listar_productos" class="dropdown-item">Mis Productos</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="<?php echo base_url();?>admin/ayuda" class="nav-link">Ayuda</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <!--
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Mensajes</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="<?php echo base_url();?>tools/dash/img/contact/1.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="<?php echo base_url();?>tools/dash/img/contact/4.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="<?php echo base_url();?>tools/dash/img/contact/3.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="<?php echo base_url();?>tools/dash/img/contact/2.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="<?php echo base_url();?>admin/mensajes">Ver todos</a>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            -->
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="<?php echo base_url();?>tools/dash/img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name">Nombre Usuario</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="<?php echo base_url();?>vendedor/actualizar_datos"><span class="edu-icon edu-home-admin author-log-ic"></span>Mi Cuenta</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>vendedor/listar_productos"><span class="edu-icon edu-user-rounded author-log-ic"></span>Mis Productos</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>vendedor/orden_compra"><span class="edu-icon edu-money author-log-ic"></span>Ordenes de Compra</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>vendedor/actualizar_datos"><span class="edu-icon edu-settings author-log-ic"></span>Mis Datos</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>admin/cerrar"><span class="edu-icon edu-locked author-log-ic"></span>Cerrar Sesión</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--
                                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="<?php echo base_url();?>tools/dash/img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                    <p> You have 20 projects. 5 not completed.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Software Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">2 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Graphic Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">3 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">4 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Business Card</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">5 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Ecommerce Business</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">6 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Woocommerce Plugin</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">7 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Wordpress Theme</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">9 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a href="events.html">Resumen</a></li>
                                    <li><a href="events.html">Facturación</a></li>
                                    <li><a href="events.html">Mensajes</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Compras <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">Mis Compras</a>
                                            </li>
                                            <li><a href="add-professor.html">Favoritos</a>
                                            </li>
                                            <li><a href="edit-professor.html">Ordenes de Compra</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Ventas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="all-students.html">Publicar Producto</a>
                                            </li>
                                            <li><a href="add-student.html">Ver Producto</a>
                                            </li>
                                            <li><a href="edit-student.html">Ver Orden de Compra</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Configuración <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="all-courses.html">Mis Datos</a>
                                            </li>
                                            <li><a href="add-course.html">Reclamos</a>
                                            </li>
                                            <li><a href="edit-course.html">Ayuda</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





<!-- CONTENIDO -->
<?php echo $content_for_layout;?>
<!-- FIN CONTENIDO -->





    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>


<script src="<?php echo base_url();?>tools/dash/js/morrisjs/raphael-min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/morrisjs/morris.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/morrisjs/morris-active.js"></script>


<script src="js/sparkline/sparkline-active.js"></script>

<script src="<?php echo base_url();?>tools/dash/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/wow.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/jquery-price-slider.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/jquery.meanmenu.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/jquery.sticky.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/scrollbar/mCustomScrollbar-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/metisMenu/metisMenu-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/calendar/moment.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/calendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/calendar/fullcalendar-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/masking-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/datepicker/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/datepicker/datepicker-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/form-validation/jquery.form.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/form-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/form-validation/form-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/dropzone/dropzone.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/tab.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/plugins.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/main.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/tawk-chat.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/bootstrap-table.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/tableExport.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/data-table-active.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/bootstrap-table-editable.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/bootstrap-editable.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/bootstrap-table-resizable.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/colResizable-1.5.source.js"></script>
<script src="<?php echo base_url();?>tools/dash/js/data-table/bootstrap-table-export.js"></script>

</html>