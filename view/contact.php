<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<title>Contacto</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Trans Al-Andalus" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<style>
		#Iframe-Liason-Sheet {
			max-width: 760px;
			max-height: 1200px;
			overflow: hidden;
		}

		/* inner wrapper: make responsive */
		.responsive-wrapper {
			position: relative;
			height: 0;
			/* gets height from padding-bottom setting */
			-webkit-overflow-scrolling: touch;
			overflow: auto;
		}

		.responsive-wrapper iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			border: none;
		}

		/* padding-bottom = h/w as a % */
		.responsive-wrapper-wxh-760x1200 {
			padding-bottom: 363.6364%;
		}

		.iframe-border {
			border: 1px solid #000;
		}

		.center-block-horiz {
			margin-left: auto !important;
			margin-right: auto !important;
		}
	</style>
</head>

<body>
	<!-- banner -->
	<div class="header">

		<div class="w3layouts_header_right">
			<div class="detail-w3l">
				<ul>
					<li>
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> + 34 653-236-752
						<li><h2 class="text-center ">Bienvenido: <?php echo $_SESSION['name']; ?></h2></li>
					</li>
				</ul>
			</div>

		</div>
		<div class="w3layouts_header_left">
			<ul>
				<li>
					<a href="../login.html"><i class="fa fa-user" aria-hidden="true"></i>Cerrar Sesion</a>
				</li>
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
				<h1><a class="navbar-brand" href="../index.php"><span><img src="../images/logo.PNG" width="60"
								height="60"></span>TRANS AL-ANDALUS</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.php"><span data-hover="Inicio">Inicio</span></a></li>
						<li><a href="../sobrenosotros.php"><span data-hover="Sobre nosotros">Sobre nosotros</span></a>
						</li>
						<!-- <li><a href="services.html"><span data-hover="Servicios">Servicios</span></a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
									data-hover="Almacenes">Almacenes</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="../sevilla.php">Sevilla</a></li>
								<li><a href="../madrid.php">Madrid</a></li>
							</ul>
						</li>
						<li><a href="../view/contact.html"><span data-hover="Contacto">Contacto</span></a></li>
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
				<li><a href="../index.php">Inicio</a><i>|</i></li>
				<li>Contacto</li>
			</ul>
		</div>
	</div>

	<!-- //bootstrap-pop-up -->
	<!-- contact -->
	<div class="contact jarallax">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Contacto</h3>

			</div>
			<div class="contact-grids">
				<div class="col-md-5 address">
					<h4>Póngase en contacto con nosotros </h4>
					<p class="cnt-p">Trans Al-Andalus es una empresa dinámica y flexible, que da solución a las
						necesidades en logística a empresas de todas clases. Ofreciendo una gestión eficiente, en todo
						lo relacionado con la gestión administrativa, de almacenamiento y transporte de productos.</p>
					<div class="agileits-social1 top_content">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<div class="agileits-social-address">
						<p>41003-Sevilla,España </p>
						<p>Telefono : +34 653-236-752</p>
						<p>FAX : +34 955-425-489</p>
						<p>Email : <a href="mailto:trans.al.andalus@gmail.com">trans.al.andalus@gmail.com</a></p>
					</div>

				</div>
				<div class="col-md-7 contact-form">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Nombre" required="">
						<input class="email" type="email" name="email" placeholder="Email" required="">
						<textarea placeholder="Escriba su Mensaje:" name="Message" required=""></textarea>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<!-- /contact map -->
	<!--Google map-->
	<div id="Iframe-Liason-Sheet" class="iframe-border center-block-horiz">
		<div class="responsive-wrapper responsive-wrapper-wxh-760x1200">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25361.068957467!2d-6.001581391357427!3d37.38667218784372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1114be6291%3A0x34f018621cfe5648!2sSevilla!5e0!3m2!1ses!2ses!4v1581297017854!5m2!1ses!2ses">Cargando...</iframe>
		</div>
	</div>
	<hr>
	<!-- /footer-contact -->
	<div class="w3-footer-contact">
		<div class="container">
			<div class="col-md-4 w3-footer-contact-left">
				<h3>Trans Al-Andalus</h3>
				<p>Una aplicación de Logistica de almacenes hecha con PHP , MySQL, phpMyAdmin, y Bootstrap.</p>
			</div>
			<div class="col-md-4 w3-footer-contact-middle">
				<img src="../images/logo.PNG" alt="img">
			</div>
			<div class="col-md-4 w3-footer-contact-right">
				<div class="col-md-2 w3-footer-contact-icon1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 w3-footer-contact-info">
					<p>Localización:</p>
					<h4>41003 Sevilla,España</h4>
s
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
							<img src="../images/DHL-Logo.png" width="200" height="200" alt=" "
								class="img-responsive ml-2 mr-2" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="../images/f3.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="../images/Fedex-logo.png" width="200" height="200" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="../images/f51.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="../images/Amazon-logo.png" width="200" height="200" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="../images/f5.png" alt=" " class="img-responsive" />

						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">
							<img src="../images/Correos_logo.svg" width="200" height="200" alt=" "
								class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="wthree_testimonials_grid_main">

							<img src="../images/f6.png" alt=" " class="img-responsive" />

						</div>
					</li>
				</ul>
			</div>
			<!-- //partners -->
		</div>
		<!-- //container -->
	</div>
	<!-- //partners -->

	</div>

	<!-- //footer-contact -->
	<div class="footer-final">
		<div class="copyw3-agile">
			<div class="container">
				<p>&copy; 2020 Trans Al-Andalus. All rights reserved | Design by <a href="#">Abel Herrero</a></p>
			</div>
		</div>
	</div>

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

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
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALpSPYeDA0y6lL1VQiALdMMjUigDQYGeM&callback=myMap"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/bars.js"></script>
	<!-- start-smooth-scrolling -->
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
</body>

</html>