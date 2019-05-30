
<!--Content-->

<div class="main-content home-page main-content-home3">
	<div class="container">
		<div class="container-offset">
			<div class="main-slideshow slideshow3">
				<div class="owl-carousel nav-style1 owl-background" data-autoplay="true" data-nav="true" data-dots="false" data-loop="true" data-slidespeed="800" data-margin="0"  data-responsive = '{"0":{"items":1}, "640":{"items":1}, "768":{"items":1}, "1024":{"items":1}, "1200":{"items":1}}' data-height="400">
					<div class="slide-item item1 item-background" data-background="<?php echo base_url();?>tools/images/slide7.jpg">
						<div class="slide-img"><img src="<?php echo base_url();?>tools/images/slide7.jpg" alt=""></div>
						<div class="slide-content">
						
							<h5 class="subtitle">Premium</h5>
							<h3 class="title">Notebook Corei7</h3>
							<h5 class="smalltitle">Only: <span class="price"> $226.00</span></h5>
							<a href="#" class="button">Comprar Ahora</a>
						</div>
					</div>
					<div class="slide-item item2 item-background" data-background="<?php echo base_url();?>tools/images/slide8.jpg">
						<div class="slide-img"><img src="<?php echo base_url();?>tools/images/slide8.jpg" alt=""></div>
						<div class="slide-content">
							<h4 class="subtitle">Tablet	</h4>
							<h3 class="title">Cambio tu Mundo</h3>
							<h5 class="smalltitle">Disponible en todos los colores</h5>
							<a href="#" class="button">Comprar Ahora</a>
						</div>
					</div>
					<div class="slide-item item3 item-background" data-background="<?php echo base_url();?>tools/images/slide9.jpg">
						<div class="slide-img"><img src="<?php echo base_url();?>tools/images/slide9.jpg" alt=""></div>
						<div class="slide-content">
							<h4 class="subtitle text-main-color">Premium</h4>
							<h3 class="title">Smart Audio</h3>
							<h5 class="smalltitle">Only: <span class="price"> $226.00</span></h5>
							<a href="#" class="button">Comprar Ahora</a>
						</div>
					</div>
				</div>
			</div>
			<div class="featrue-box-list equal-container">
				<div class="row">
					<div class="col-ss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4 featrue-item">
						<div class="featrue-box layout2 equal-elem">
							<div class="block-icon"><a href="#"><span class="fa fa-truck"></span></a></div>
							<div class="block-inner">
								<a href="#" class="title">Gestionamos tus Envío</a>
								<p class="des">Transportes Nacionales e Internacionales</p>
							</div>
						</div>
					</div>
					<div class="col-ss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4 featrue-item">
						<div class="featrue-box layout2 equal-elem">
							<div class="block-icon"><a href="#"><span class="fa fa-retweet"></span></a></div>
							<div class="block-inner">
								<a href="#"  class="title">Trapasos de Dinero</a>
								<p class="des">Pago a Proveedores</p>
							</div>
						</div>
					</div>
					<div class="col-ss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4 featrue-item">
						<div class="featrue-box layout2 equal-elem">
							<div class="block-icon"><a href="#"><span class="fa fa-life-ring"></span></a></div>
							<div class="block-inner">
								<a href="#"  class="title">Call Center 24/7</a>
								<p class="des">Soporte Técnico Especializado</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>



<div class="main-content home-page main-content-home1">
	<div class="container">

		<!--List Products-->
		<div class="group-product layout1">
			<div class="kt-tab nav-tab-style1">
				<div class="section-head box-has-content">
					<h4 class="section-title">PRODUCTOS DESTACADOS</h4>
					<ul class="nav list-nav">
						<li class="active"><a data-animated="pulse" data-toggle="pill" href="#tab1">Todo</a></li>
						<li><a data-animated="fadeIn" data-toggle="pill" href="#tab2">Telefonía</a></li>
						<li><a data-animated="fadeInDown" data-toggle="pill" href="#tab1">Computación </a></li>
						<li><a data-animated="fadeInUp" data-toggle="pill" href="#tab2">Accesorios </a></li>
					</ul>
				</div>
				<div class="section-content">
					<div class="tab-content">

						<div id="tab1" class="tab-panel active">
							<div class="owl-carousel product-list-owl nav-style2 equal-container" data-autoplay="false" data-nav="true" data-dots="false" data-loop="false" data-slidespeed="800" data-margin="0"  data-responsive = '{"0":{"items":1}, "480":{"items":2,"margin":0}, "640":{"items":3,"margin":-1}, "992":{"items":4}, "1200":{"items":5}}'>
							
							<?php foreach ($producto as $dato) { ?>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Ver Producto</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/<?php echo $dato->ruta;?>" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name"><?php echo $dato->nombre;?> <?php echo $dato->descripcion;?></a>
											<div class="price">
												<span>$<?php echo $dato->precio;?></span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
												<a href="#" class="add-to-cart"><span class="text">AGREGAR</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
												<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
												<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
					    	<?php }?>

							</div>
						</div>

<!--/List Products
						<div id="tab2" class="tab-panel">
							<div class="owl-carousel product-list-owl nav-style2 equal-container" data-autoplay="false" data-nav="true" data-dots="false" data-loop="false" data-slidespeed="800" data-margin="0"  data-responsive = '{"0":{"items":1}, "480":{"items":2,"margin":0}, "640":{"items":3,"margin":-1}, "992":{"items":4}, "1200":{"items":5}}'>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product1.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">Rubberized Hard Case Older MacBook Pro 13.3"</a>
											<div class="price">
												<span>$350.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
												<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
												<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
												<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<ul class="group-flash">
											<li><span class="new flash">NUEVO</span></li>
										</ul>											
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product2.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">Smartphone RAM 4 GB New</a>
											<div class="price">
												<span >$350.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
											<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
											<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
											<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<ul class="group-flash">
											<li><span class="sale flash">-50%</span></li>
											<li><span class="best flash">Exito en Ventas</span></li>
										</ul>
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product3.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">Fujifilm INSTAX Mini 8 Instant Camera (White)</a>
											<div class="price">
												<span class="del">$700.00</span>
												<span class="ins">$350.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
											<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
											<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
											<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product4.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">PC Prox 21.5-inch and 27-inch (Late 2018) reviews</a>
											<div class="price">
												<span >$550.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
											<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
											<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
											<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<ul class="group-flash">
											<li><span class="sale flash">-50%</span></li>
										</ul>
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product5.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">Best Accessories- SteelSeries NIMBUS Controlle</a>
											<div class="price">
												<span class="del">$500.00</span>
												<span class="ins">$250.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
											<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
											<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
											<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-item layout1">
									<div class="product-inner equal-elem">
										<div class="thumb">
											<a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span> Quick View</a>
											<a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product6.jpg" alt=""></a>
										</div>
										<div class="info">
											<a href="detail.html" class="product-name">Headphone </a>
											<div class="price">
												<span >$450.00</span>
											</div>
										</div>
										<div class="group-button">
											<div class="inner">
											<a href="#" class="add-to-cart"><span class="text">ADD TO CART</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
											<a href="#" class="compare-button"><i class="fa fa-exchange" aria-hidden="true"></i></a>
											<a href="#" class="wishlist-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
-->

					</div>
				</div>
			</div>	
		</div>
		<!--/List Products-->

	</div>
</div>
<!--/Content-->