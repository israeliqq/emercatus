<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Emercatus</title>



 
<!-- FAVICON -->
<link rel="shortcut icon" href="<?php echo base_url("tools/images/favicon.ico");?>" type="image/x-icon">


<!-- COLOR BARRA DE NAVEGADOR WEB -->
<meta name="theme-color" content="#F27A23">
<meta name="msapplication-TileColor" content="#F27A23">

<!-- HOJA DE ESTILOS -->
<link href="<?php echo base_url();?>tools/css/bootstrap.min.css"          rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/owl.carousel.min.css"       rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/font-awesome.min.css"       rel="stylesheet" type="text/css">
<!--       									https://fontawesome.com/v4.7.0/icons/   -->
<link href="<?php echo base_url();?>tools/css/animate.min.css"            rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/jquery-ui.min.css"          rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="<?php echo base_url();?>tools/css/jquery.scrollbar.min.css"   rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/chosen.min.css"             rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/ovic-mobile-menu.css"       rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/style.css"                  rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/customs-css3.css"           rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>tools/css/emercatus.css"              rel="stylesheet" type="text/css">
<link href="<?php echo base_url('tools/dropzone/dist/min/dropzone.min.css');?>"              rel="stylesheet" type="text/css">


<!-- FIN HOJAS DE ESTILOS -->

</head>
<body class="home home1">
	<div class="special-container">

<!--HEADER-->
<header>
	<div class="header layout2 no-prepend-box-sticky header-home3">
		<div class="topbar layout1">
			<div class="container">
				<ul class="menu-topbar">
					<li class="language menu-item-has-children">
						<a href="#" class="toggle-sub-menu"><span class="flag"><img src="<?php echo base_url("tools/images/flag3.jpg");?>" alt=""></span> Español</a>
						<ul class="list-language sub-menu">
							<li><a href="#"><span class="flag"><img src="<?php echo base_url("tools/images/flag4.jpg");?>" alt=""></span> English</a></li>
							<li><a href="#"><span class="flag"><img src="<?php echo base_url("tools/images/flag5.jpg");?>" alt=""></span> Chinase</a></li>
							<li><a href="#"><span class="flag"><img src="<?php echo base_url("tools/images/Portugal-icon.png");?>" alt=""></span> Português</a></li>
						</ul>
					</li>
					<li class="currencies menu-item-has-children">
						<a href="#" class="toggle-sub-menu"><span class="text">DOLAR </span>(USD)</a>
						<ul class="list-currencies sub-menu">
							<li><a href="#"><span class="text">CHILE </span>(CLP)</a></li>
						</ul>
					</li>
				</ul>
				<ul class="menu-topbar top-links">
					<?php if(isset($_SESSION["usuario"])){ ?>
						<li><?php echo strtoupper($_SESSION["usuario"])." "; ?><a href="<?php echo base_url("tienda/cerrar");?>"> Cerrar Sesión</a></li>		
					<?php }else{?>
						<li><a href="<?php echo base_url("tienda/login");?>">Registrarse / Iniciar Sesión</a></li>
					<?php }?>
				</ul>
				<ul class="list-socials">
					<li><a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li> | &nbsp;&nbsp; </li>
				</ul>

			</div>
		</div>
		
		<div class="main-header">
			<div class="top-header">
				<div class="this-sticky">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12  left-content">
								<div class="logo">
									<a href="<?php echo base_url("tienda/index");?>"><img src="<?php echo base_url("tools/images/main-logo.jpg");?>" alt=""></a>
								</div>
							</div>
							<div class="col-lg-8 col-md-4 col-sm-4 col-xs-6 midle-content">
								<div class="header-nav container-vertical-wapper ">
									<div class="header-nav-inner">
										<div class="box-header-nav">
											<div class=" container-wapper">
												<a class="menu-bar mobile-navigation" href="#">
													<span class="icon">
														<span></span>
														<span></span>
														<span></span>
													</span>
													<span class="text">Menu Principal</span>
												</a>
												<a href="#" class="header-top-menu-mobile"><span class="fa fa-cog" aria-hidden="true"></span></a>
												<ul id="menu-main-menu" class="main-menu clone-main-menu ovic-clone-mobile-menu box-has-content">
													<li class="menu-item">
														
														<a  href="<?php echo base_url("comprador/negociaciones");?>" class="kt-item-title ovic-menu-item-title" title="Home">NEGOCIACIONES</a>
													</li>
													<li class="menu-item"><a href="<?php echo base_url("vendedor/misproductos");?>">MIS PRODUCTOS</a></li>
													<li class="menu-item"><a href="<?php echo base_url("vendedor/publicar");?>">PUBLICAR</a></li>
													<li class="menu-item"><a href="<?php echo base_url("comprador/miscompras");?>">MIS COMPRAS</a></li>
													

												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>								
							<div class="col-lg-2 col-md-5 col-sm-5 col-xs-6 right-content">
								<ul class="header-control">
									<li class="box-minicart">
										<div class="minicart ">
											<div class="cart-block  box-has-content">
												<a href="shopping-cart.html" class="cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="count">0</span></a>
												<span class="total-price"><span class="text">Pendientes: </span>1</span>
											</div>
											<div class="cart-inner cart-empty">
												<h5 class="title">Negociaciones <span class="count-item">0</span> Pendientes</h5>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-nav-wapper ">
				<div class="container main-menu-wapper">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 left-content">
							<div class="vertical-wapper parent-content">
								<div class="block-title show-content">
									<span class="icon-bar">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="text">Categorías</span>
								</div>
								<div class="vertical-content hidden-content">
									<ul class="vertical-menu ovic-clone-mobile-menu">
										<li><a href="#" class="ovic-menu-item-title" title="Cameras"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon1.png" alt=""></span> Computación</a></li>
										<li><a href="#" class="ovic-menu-item-title" title="Tv & Audio"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon2.png" alt=""></span> Joyería y Perfumería</a></li>
										<li class="menu-item-has-children has-megamenu">
											<a href="#" class="ovic-menu-item-title" title="Laptop & Computer"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon3.png" alt=""></span> Electrónica</a>
											<a href="#" class="toggle-sub-menu"></a>
											<div class="sub-menu sub-menu1 mega-menu">
												<div class="row">
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
														<h5 class="title widgettitle">Electronics</h5>
														<ul>
															<li><a href="#">Computación</a></li>
															<li><a href="#">Perfumería</a></li>
															<li><a href="#">Accesorios</a></li>
															<li><a href="#">Vehículos</a></li>
															<li><a href="#">Juguetes</a></li>
															<li><a href="#">Moda y Calzado</a></li>
														</ul>
													</div>
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
														<h5 class="title widgettitle">Computers</h5>
														<ul>
															<li><a href="#">Computer & Tablet</a></li>
															<li><a href="#">Monitors</a></li>
															<li><a href="#">Networking</a></li>
															<li><a href="#">Drivers</a></li>
														</ul>
													</div>
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4"></div>
													</div>
												<div class="row">
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4">
														<h5 class="title widgettitle">Laptops</h5>
														<ul>
															<li><a href="#">Software</a></li>
															<li><a href="#">Camera & Video</a></li>
															<li><a href="#">Networking</a></li>
															<li><a href="#">Bluetooth & Wireless</a></li>
															<li><a href="#">Printer & Ink</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li><a href="#" class="ovic-menu-item-title" title="Accessories"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon4.png" alt=""></span> Jueguetes</a></li>
										<li class="menu-item-has-children has-megamenu">
											<a href="#" class="ovic-menu-item-title" title="Smartphone & Table"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon5.png" alt=""></span> Vehículos</a>
											<a href="#" class="toggle-sub-menu"></a>
											<div class="sub-menu mega-menu sub-menu2">
												<div class="row">
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<h5 class="title widgettitle">Electronics</h5>
														<ul>
															<li><a href="#">Computación</a></li>
															<li><a href="#">Perfumería</a></li>
															<li><a href="#">Accesorios</a></li>
															<li><a href="#">Vehículos</a></li>
															<li><a href="#">Juguetes</a></li>
															<li><a href="#">Moda y Calzado</a></li>
														</ul>
													</div>
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<h5 class="title widgettitle">Tablets</h5>
														<ul>
															<li><a href="#">Computación</a></li>
															<li><a href="#">Perfumería</a></li>
															<li><a href="#">Accesorios</a></li>
															<li><a href="#">Vehículos</a></li>
															<li><a href="#">Juguetes</a></li>
															<li><a href="#">Moda y Calzado</a></li>
														</ul>
													</div>
													<div class="widget-custom-menu col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<h5 class="title widgettitle">Accessories</h5>
														<ul>
															<li><a href="#">Computación</a></li>
															<li><a href="#">Perfumería</a></li>
															<li><a href="#">Accesorios</a></li>
															<li><a href="#">Vehículos</a></li>
															<li><a href="#">Juguetes</a></li>
															<li><a href="#">Moda y Calzado</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li><a href="#" class="ovic-menu-item-title" title="Printers & Ink"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon6.png" alt=""></span> Moda y Calzado</a></li>
										<li class="more-item hidden-item"><a href="#" class="ovic-menu-item-title" title="Game & Consoles"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon7.png" alt=""></span> Hogar</a></li>
										<li class="more-item hidden-item"> <a href="#" class="ovic-menu-item-title" title="Headphone"><span class="icon"><img src="<?php echo base_url();?>tools/images/icon8.png" alt=""></span> Telefonía</a></li>
									</ul>
									<div class="view-all-categori">
										<a href="#" class="button">Mostras Más <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
						<form id="buscar" name="buscar" method="POST" action="<?= base_url('comprador/buscar') ?>">
						<div class="col-lg-7 col-md-5 col-sm-8 col-xs-8 col-ts-12 middle-content">
							<div class="search-form layout2 box-has-content">
								<div class="search-block">
									<div class="search-choice parent-content">
										<select data-placeholder="All Categories" class="chosen-select">
											<option value="0">Categorías</option>
											<option value="1">Electronica</option>
											<option value="2">Vehiculos</option>
											<option value="3">Perfumería</option>
											<option value="4">Deporte</option>
											<option value="5">Juguetes</option>
											<option value="6">Casa y Hogar</option>
											<option value="7">Moda y Calzado</option>
										</select>
									</div>
									<div class="search-inner">
										<input type="text" class="search-info" placeholder="Buscar Producto...">
									</div>
									<a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						</form>
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 col-ts-12 right-content">
							<div class="hotline">
								<div class="icon">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="content">
									<span class="text">Call Center</span>
									<span class="number">+569 0000 0000</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--/HEADER-->

<!-- CONTENIDO -->
<?php echo $content_for_layout;?>
<!-- FIN CONTENIDO -->
	
<!--FOOTER-->
<footer>
    <div class="footer layout1 home1">
        <div class="special-container">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-ss-12">
							<div class="widget widget-text">
								<h3 class="widgettitle">Información de Contacto</h3>
								<div class="content">
									<h5 class="subtitle">Dirección</h5>
									<p class="des">Salitrera Victoria s/n - Iquique, Región de Tarapacá</p>
									<h5 class="subtitle">Telefono</h5>
									<p class="des">(+56) 9 0000 0000</p>
									<h5 class="subtitle">Email</h5>
									<p class="des">Soporte@emercatus.cl <br> Contacto@emercatus.cl</p>
								</div>
							</div>
							<ul class="list-socials">
								<li><a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="http://www.pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 col-ss-12">
							<div class="newsletter-form layout1 box-has-content">
								<div class="widget widget-newsletter">
									<h3 class="widgettitle">Asociados</h3>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											<!--Logo Brand-->
												<div class="owl-carousel" data-autoplay="true" data-nav="false" data-dots="false" data-loop="true" data-slidespeed="800" data-margin="30"  data-responsive = '{"0":{"items":2}, "640":{"items":2}, "768":{"items":3}, "992":{"items":4}, "1200":{"items":5}}'>
													<div class="brand-item"><a href="#"><img src="<?php echo base_url();?>tools/images/auz.png" alt=""></a></div>
													<div class="brand-item"><a href="#"><img src="<?php echo base_url();?>tools/images/auz.png" alt=""></a></div>
													<div class="brand-item"><a href="#"><img src="<?php echo base_url();?>tools/images/auz.png" alt=""></a></div>
													<div class="brand-item"><a href="#"><img src="<?php echo base_url();?>tools/images/auz.png" alt=""></a></div>
													<div class="brand-item"><a href="#"><img src="<?php echo base_url();?>tools/images/auz.png" alt=""></a></div>
												</div>
											
											<!--/Logo brand-->

										</div>
									</div>
								</div>
							</div>
							<div class="row auto-clear">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12 ">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Mi Cuenta</h3>
										<ul >
											<li><a href="<?php echo base_url("tienda/login");?>">Iniciar Sesión</a></li>
											<li><a href="<?php echo base_url("tienda/login");?>">Mis Compras</a></li>
											<li><a href="<?php echo base_url("tienda/login");?>">Mis Ventas</a></li>
											
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12 ">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Información</h3>
										<ul>
											<li><a href="<?php echo base_url("tienda/login");?>">Politicas de Privacidad</a></li>
											<li><a href="<?php echo base_url("tienda/login");?>">Terminos y Condiciones</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Servicios al Clientes</h3>
										<ul>
											<li><a href="<?php echo base_url("tienda/login");?>">Mapa del Sitio</a></li>
											<li><a href="<?php echo base_url("tienda/login");?>">Contacto</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ts-12">
									<div class="widget widget-custom-menu">
										<h3 class="widgettitle">Pago y Envio</h3>
										<ul>
											<li><a href="<?php echo base_url("tienda/login");?>">Ayuda</a></li>
											<li><a href="<?php echo base_url("tienda/login");?>">Metodos de Pago</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-note">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 left-content">
							<div class="coppy-right">
								<h3 class="content">© Copyright 2019 <span class="site-name"> EMERCATUS</span> <span class="text"> Proyecto Beta. </span>Todos los derechos reservados.</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 right-content">
							<ul class="list-payment">
								<li><a href="#"><img src="<?php echo base_url();?>tools/images/payment1.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>tools/images/payment2.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>tools/images/payment3.png" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>tools/images/payment4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
        </div>
    </div>
</footer>
<!--/FOOTER-->

<a class="back-to-top" href="#"></a>

<!-- LIBRERIAS JS -->

<script src="<?php echo base_url();?>tools/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>tools/js/bootstrap.min.js" ></script>
<script src="<?php echo base_url();?>tools/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>tools/js/owl.thumbs.min.js"></script>
<script src="<?php echo base_url();?>tools/js/ovic-mobile-menu.js"></script>
<script src="<?php echo base_url();?>tools/js/mobilemenu.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery.plugin-countdown.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery-countdown.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>tools/js/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url();?>tools/js/chosen.min.js"></script>
<script src="<?php echo base_url();?>tools/js/frontend.js"></script>



<!-- FIN LIBRERIAS JS -->
	</div>
</body>
</html>