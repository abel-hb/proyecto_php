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
	<title>Sobre Nosotros</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Trans Al-Andalus" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
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
								height="60"></i></span>TRANS AL-ANDALUS</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php"><span data-hover="Inicio">Inicio</span></a></li>
						<li><a href="sobrenosotros.php"><span data-hover="Sobre nosotros">Sobre nosotros</span></a>
						</li>
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
	<div class="banner-multi">
	</div>
	<div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Inicio</a><i>|</i></li>
				<li>Sobre Nosotros</li>
			</ul>
		</div>
	</div>
	<!-- //bootstrap-pop-up -->
	<!-- about page -->
	<div class="inner_main_agile_section">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Sobre Nosotros</h3>
			</div>
			<div class="agile_inner_grids">
				<div class="col-md-6 w3_agileits_about_grid_left">
					<p>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las necesidades en
						logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo relacionado
						con la gestión administrativa, de almacenamiento y transporte de productos.<span></p>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Entrega rápida</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Clientes internacionales</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Respuesta rápida</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Soluciones efectivas</li>
					</ul>
				</div>
				<div class="col-md-6 w3_agileits_about_grid_right">
					<div id="chart">
						<ul id="numbers">
							<li><span>100%</span></li>
							<li><span>90%</span></li>
							<li><span>80%</span></li>
							<li><span>70%</span></li>
							<li><span>60%</span></li>
							<li><span>50%</span></li>
							<li><span>40%</span></li>
							<li><span>30%</span></li>
							<li><span>20%</span></li>
							<li><span>10%</span></li>
							<li><span>0%</span></li>
						</ul>
						<ul id="bars">
							<li>
								<div data-percentage="30" class="bar"></div><span>2014</span>
							</li>
							<li>
								<div data-percentage="50" class="bar"></div><span>2015</span>
							</li>
							<li>
								<div data-percentage="58" class="bar"></div><span>2016</span>
							</li>
							<li>
								<div data-percentage="23" class="bar"></div><span>2017</span>
							</li>
							<li>
								<div data-percentage="65" class="bar"></div><span>2018</span>
							</li>
							<li>
								<div data-percentage="94" class="bar"></div><span>2019</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about page -->
	<!-- team -->
	<div class="team1" id="team1">
		<div class="container">
			<div class="w3-headings-all">
				<h3>NUESTRO EQUIPO</h3>
			</div>
			<div class="agileinfo-team-grids">
				<div class="col-md-3 wthree-team-grid">
					<img src="images/w1.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Abel Herrero</h4>
						<p>Director</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/w2.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>jose Piñez</h4>
						<p>Co-Fundador</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/w3.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Cristina Jimenez</h4>
						<p>Recurso Humanos</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/w4.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Antonio Perez</h4>
						<p>Departamento Calidad</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- testimonial -->
	<div class="testimonial testimonial_about agileits-w3layouts" id="testimonial">
		<div class="container">
			<div class="w3-headings-all">
				<h3>TESTIMONIOS</h3>
			</div>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Con nuestros servicios de Almacenes, ya no te tienes que preocupar por si tendras
									espacios suficientes por que conc nuestras ultimas tecnologias punteras ya no sera
									un problema el espacio, por que optimizamos hasta el ultimo hueco de los almacenes.
								</p>
								<h5>Hombre de negocios</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Con nuestros servicios Portuarios, no tendras esas demoras ocasionadas o perdidas de
									productos. Ya que utilizamos las ultimas tecnologias en nuestros puertos por todo el
									mundo.</p>
								<h5>Analista </h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Con nuestros servicios de Envió, no tendras esas demoras ocasionadas o perdidas de
									productos. Ya que utilizamos las ultimas tecnologias en nuestros envios por todo el
									mundo.</p>
								<h5>Transportista</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las
									necesidades en
									logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo lo
									relacionado
									con la gestión administrativa, de almacenamiento y transporte de productos</p>
								<h5>Gerente</h5>
							</div>
						</div>
					</div>
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><img src="images/t11.jpg" alt="" /></li>
						<li class="resp-tab-item"><img src="images/t33.jpg" alt="" /></li>
						<li class="resp-tab-item"><img src="images/t44.jpg" alt="" /></li>
						<li class="resp-tab-item"><img src="images/t55.jpg" alt="" /></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
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
					<h4>41003-Sevilla,España</h4>

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
								<img src="images/DHL-Logo.png" width="200" height="200" alt=" "
									class="img-responsive ml-2 mr-2" />
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
								<img src="images/Correos_logo.svg" width="200" height="200" alt=" "
									class="img-responsive" />
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
		<!-- //container -->
	</div>
	<!-- //footer-contact -->
	</div>
	<!-- //footer-contact -->
	<div class="footer-final">
		<div class="copyw3-agile">
			<div class="container">
				<p>&copy; 2020 Trans Al-Andalus. All rights reserved | Design by <a href="#">Abel Herrero</a></p>
			</div>
		</div>
	</div>
	<!-- JS -->
	<script type="text/javascript" src="view/js/jquery-2.1.4.min.js"></script>
	<!--bars -->
	<script type="text/javascript">
		$(function () {
			$("#bars li .bar").each(function (key, bar) {
				var percentage = $(this).data('percentage');

				$(this).animate({
					'height': percentage + '%'
				}, 1000);
			})
		})
	</script>
	<!-- bars -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
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
	<!-- ResponsiveTabs -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
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
</body>

</html>