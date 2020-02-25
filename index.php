<!--
author: Abel
License: 2020 Trans Al-Andalus. All rights reserved | Design by Abel Herrero
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Trans Al-Andalus</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Trans Al-Andalus" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mainStyles.css" />
	<!-- //gallery -->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
</head>

<body>
	<!-- banner -->
	<div class="header">

		<div class="w3layouts_header_right">
			<div class="detail-w3l">
				<ul>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> + 34 653-236-752</li>
					<li><h2 class="text-center ">Bienvenido: <?php echo $_SESSION['name']; ?></h2></li>
				</ul>
			</div>

		</div>
		<div class="w3layouts_header_left">
			<ul>
				<li><a href="login.html"><i class="fa fa-user" aria-hidden="true"></i>Cerrar Sesion</a></li>
			</ul>

		</div>
		<div class="agileits-social top_content">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
				<li><a href="#"><i class="fa fa-vk"></i></a></li>
			</ul>
		</div>

		<div class="clearfix"> </div>
	</div>

	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.php"><span><img src="images/logo.PNG" width="60"
					height="60"></span>TRANS AL-ANDALUS</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php"><span data-hover="Inicio">Inicio</span></a></li>
						<li><a href="sobrenosotros.php"><span data-hover="Sobre nosotros">Sobre nosotros</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
									data-hover="Almacenes">Almacenes</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="sevilla.php">Sevilla</a></li>
								<li><a href="madrid.php">Madrid</a></li>
							</ul>
						</li>
						<li><a href="/PROYECTO_PHP/view/contact.php"><span data-hover="Contacto">Contacto</span></a></li>
					</ul>
				</nav>

			</div>

		</nav>
	</div>

	<!-- //banner -->
	<div id="exampleSlider">
		<div>
			<h3>El envío<span>servicios en los que puede confiar</span></h3>
		</div>
		<div>
			<h3>La logística hace <span>comodidad por menos tiempo</span></h3>
		</div>
		<div>
			<h3>La Compras puede <span>hacer un cliente feliz</span></h3>
		</div>
		<div>
			<h3>El Transporte puede <span>hacer un cliente feliz </span></h3>
		</div>
	</div>
	<!-- //Modal1 -->


	<!-- //bootstrap-pop-up -->
	<div class="w3-about-us">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Bienvenidos</h3>
			</div>
			<div class="w3-about-text">
				<p>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las necesidades en logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo relacionado con la gestión administrativa, de almacenamiento y transporte de productos.</p>
			</div>
			<div class="w3-about-all-grid">
				<div class="col-md-6 w3-about-grid-left">
					<ul>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Conocimiento de las estrategias</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Caro, menos.
							</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Envío en línea</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Paquete logístico</h3>
						</li>
					</ul>
				</div>
				<div class="col-md-6 w3-about-grid-right">
					<ul>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Actualización constante</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Empatía.
							</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Buena Organización</h3>
						</li>
						<li>
							<h3><span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>Paquete del cliente</h3>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- /about brief -->
			<div class="events">

				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/Saeso-Logística-800x480.jpg"  alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>23 March 2019</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Contratos Nacionales</a></h5>
						<p>Tenemos contratos con un gran numero de empresas españolas.</p>
					</div>
				</div>


				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/CONTRATOS-ch.jpg" height="100" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>25 March 2019</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Contratos Internacionales</a></h5>
						<p>Nuestra empresa siempre busca mejorar día tras día con proyectos muy ambiciosos.</p>
					</div>
				</div>
				<div class="clearfix"></div>


				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/Dd8MHIsV4AA4_3X.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>28 March 2020</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>35</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>32</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>130</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Buscas Empleo</a></h5>
						<p>Solo tienes que ponerte en contacto con nuestro departamente de Recursos Humanos.</p>
					</div>
				</div>

				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/ab4.jpg" alt=" " class="img-responsive"/>
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>55</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>210</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>15</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Proyectos Activos </a></h5>
						<p>Tenemos proyectos con el Gobierno, Ejercitos y con muchas empresas mundialmente.</p>
					</div>
				</div>
				<div class="clearfix"></div>



			</div>
			<!-- //about brief -->

		</div>
	</div>
	<!-- services -->
	<div class="w3-agile-services">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Servicios</h3>
			</div>
			<div class="agileits-services">
				<div class="services-right-grids">
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Servicio de Envió</h5>
							<p>Con nuestros servicios de Envió, no tendras esas demoras ocasionadas o perdidas de productos. Ya que utilizamos las ultimas tecnologias en nuestros envios por todo el mundo.</p>
							<h4><a href="#" data-toggle="modal" data-target="#myModal11">Leer más</a></h4>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-ship" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Servicio de Portuario</h5>
							<p>Con nuestros servicios Portuarios, no tendras esas demoras ocasionadas o perdidas de productos. Ya que utilizamos las ultimas tecnologias en nuestros puertos por todo el mundo.</p>
							<h4><a href="#" data-toggle="modal" data-target="#myModal11">Leer más</a></h4>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-industry fa-2x" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Servicio de Almacenes</h5>
							<p>Con nuestros servicios de Almacenes, ya no te tienes que preocupar por si tendras espacios suficientes por que conc nuestras ultimas tecnologias punteras ya no sera un problema el espacio, por que optimizamos hasta el ultimo hueco de los almacenes.</p>
							<h4><a href="#" data-toggle="modal" data-target="#myModal11">Leer más</a></h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal11" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span1"
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Servicios</h4>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/m1.jpg" alt="" />
						<p>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las necesidades en logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo relacionado con la gestión administrativa, de almacenamiento y transporte de productos.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<!-- /our advantages -->
	<div class="w3-advantages" id="advantages">
		<div class="container">
			<div class="w3-headings-all">
				<h3>ÚLTIMAS NOTICIAS</h3>
			</div>
			<div class="w3-adv-grids">
				<div class="col-md-6 w3-adv-left1">
					<div class="w3-adv-lef1-text">
						<h3>Contractos Internacionales</h3>
						<p>Proximamente</p>
					</div>
					<div class="w3-adv-lef1-text2">
						<p><span>"</span>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las necesidades en logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo relacionado con la gestión administrativa, de almacenamiento y transporte de productos.<span>"</span></p>
						<p><span>"</span>Praesent tristique nisi quis ultricies facilisis. Integer molestie nisl eros,
							eget rhoncus dolor porttitor eu. Nullam imperdiet dolor nibh, in pulvinar quam commodo
							efficitur<span>"</span></p>
						<h4>Somos los lideres del mercado en el Top 10 del Mundo </h4>
					</div>
				</div>
				<div class="col-md-6 w3-adv-right1">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6 w3-adv-left2">
				</div>
				<div class="col-md-6 w3-adv-right2">
					<div class="w3-adv-right2-text">
						<h3>Contenedores</h3>
						<p>Proximamente </p>
					</div>
					<div class="w3-adv-right2-text-para">
						<p>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las necesidades en logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo relacionado con la gestión administrativa, de almacenamiento y transporte de productos.</p>
					</div>
					<div class="w3-adv-right2-icons">
						<p><i class="fa fa-plane" aria-hidden="true"></i>Aviones</p>
						<p><i class="fa fa-sitemap" aria-hidden="true"></i>Logística</p>
						<p><i class="fa fa-crosshairs" aria-hidden="true"></i>Geolocalización</p>
						<p><i class="fa fa-globe" aria-hidden="true"></i>Globalización</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //our advantages -->
	<!-- /Subscribe -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class=" col-md-6 agileits-title">
				<h6>- Suscríbete a nuestro</h6>
				<h3>Boletín de noticias</h3>
			</div>
			<div class=" col-md-6 agileits-title-right">
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- /footer-contact -->
	<div class="w3-footer-contact">
		<div class="container">
			<div class="col-md-4 w3-footer-contact-left">
				<h3>Trans Al-Andalus</h3>
				<p>Una aplicación de Logística de almacenes hecha con PHP , MySQL, phpMyAdmin, y Bootstrap.</p>
			</div>
			<div class="col-md-4 w3-footer-contact-middle">
				<img src="images/logo.PNG" alt="img">
			</div>
			<div class="col-md-4 w3-footer-contact-right">
				<div class="col-md-2 w3-footer-contact-icon1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 w3-footer-contact-info">
					<p>Localización:</p>
					<h4>41003 Sevilla,España</h4>

				</div>
				<div class="clearfix"></div>
				<div class="col-md-2 w3-footer-contact-icon1">
					<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 w3-footer-contact-info">
					<p>Telefono:</p>
					<h4>+34 653-236-752</h4>

				</div>
				<div class="clearfix"></div>
				<div class="col-md-2 w3-footer-contact-icon1">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 w3-footer-contact-info">
					<p>Email:</p>
					<h4><a href="mailto:trans.al.andalus@gmail.com"> trans.al.andalus@gmail.com
						</a></h4>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>


			<!-- partners -->
			<div class="team gallery-ban" id="team">
				<ul id="flexiselDemo1">
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="images/DHL-Logo.png" width="200" height="200" alt=" " class="img-responsive ml-2 mr-2" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="images/f3.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="images/Fedex-logo.png" width="200" height="200" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="images/f51.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="images/Amazon-logo.png" width="200" height="200" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="images/f5.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="images/Correos_logo.svg" width="200" height="200" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="images/f6.png" alt=" " class="img-responsive" />

						</div>
					</li>
				</ul>
			</div>
			<!-- //partners -->
		</div>
	</div>

	<!-- //footer-contact -->
	<div class="footer-final">
		<div class="copyw3-agile">
			<div class="container">
				<p>&copy; 2020 Trans Al-Andalus. All rights reserved | Design by <a href="#">Abel Herrero</a></p>
			</div>
		</div>
	</div>


	<script src="js/mainScript.js"></script>
	<script src="js/rgbSlide.min.js"></script>


	<!--team-->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!--team-->
	<!-- //here ends scrolling icon -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<!-- start-smoth-scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>

</body>

</html>