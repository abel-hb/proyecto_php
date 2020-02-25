<!--
author: Abel
License: 2020 Trans Al-Andalus. All rights reserved | Design by Abel Herrero
-->
<?php
 include 'models/conn.php';
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Almacen Madrid</title>
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
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
				<a href="login.html"><i class="fa fa-user" aria-hidden="true"></i>Cerrar Sesion</a>
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
<div class="banner-multi">
</div>
<div class="about-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.php">Inicio</a><i>|</i></li>
			<li>Almacén - Madrid</li>
		</ul>
	</div>
</div>
	<!--web icons -->
<!--typography-page -->
<div class="typo">
		<div class="container">
			<div class="typo-title">
				<h3>Almacén - Madrid</h3>
			</div>
			<div class="container-fluid text-center">
				<div class="row">
					<div class="col-lg-12">		
						<div class="card">
							<div class="loginBox text-center">
								<img src="images/logo.PNG" class="text-center" alt="PHP MySQL logos">
								<h3 class="bars text-center">Calcular capacidad almacén</h3>
								<p>Para la mejor optimización del almacén hay que meter los datos exacto del tipo de carga</p>
								<hr>
								<form action="calcular-espacio.php" method="post">                           	
									<div class="form-group">
										<label for="exampleFormControlSelect1">Selecciona Almacen:</label>
										<select name="almacen" class="form-control" id="exampleFormControlSelect1" required>
											<option value="0">Seleccione:</option>
											<?php
											// conexión de BD
											$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
											// consulta enviada a la BD
											$query = $conn -> query ("SELECT * FROM logistica");
											// Variable $valores es para guardar los datos de la consulta
											// y el While es para recorrerlo y mostrarlo
											while ($valores = mysqli_fetch_array($query)) {
												echo '<option value="'.$valores[nombre_almacen].'">'.$valores[nombre_almacen].'</option>';
											}
											?>
										</select>
									</div>
									<div class="form-group"> 
											<label for="exampleFormControlSelect1">Producto:</label>       
											<input type="text" class="form-control input-lg" name="producto" placeholder="Producto a Empaquetar"  maxLengt="10"required>       
									</div>
									<div class="form-group"> 
											<label for="exampleFormControlSelect1">Cantidad:</label>       
											<input type="number" class="form-control input-lg" name="cantidad" placeholder="Cantidad" min="0"  maxLengt="10"required>       
									</div>
									<div style="text-align: center;">
									<label for="exampleFormControlSelect1">Seleccione tipo de carga:</label><br><br><br>
										<table style="border:1; margin: auto;">
											<tbody class="text-center"><tr>
												<td style="padding: 10px 10px; text-aling: center;">
													<img src="images/box.png" width="120" height="115" class="img-size"  style="cursor:pointer;" title="Cajas" alt="Cajas">
													<br>Cajas<br>
													<br><input id="box" name="carga"value="Caja" type="radio" required>
												</td>
												<td  style="padding: 0 10px;">
													<img src="images/bochka.png" width="120" height="115" class="img-size"  style="cursor:pointer;" title="Barriles" alt="Barriles">
													<br>Barriles<br>
													<br><input id="bochka" name="carga" value="Barril" type="radio" required>
												</td>
												<td style="padding: 0 10px;">
													<img src="images/palet.png" width="120" height="115" class="img-size" style="cursor:pointer;" title="Palet" alt="Palet">
													<br>Palet<br>
													<br><input id="meshok" name="carga" value="Palet" type="radio" required>
												</td>
											</tr>
										</tbody></table>
										<br>
					</div>					
										<div class="form-group">
										<label>Material Peligroso:</label><br>									
										SI<input class="checbo" name="mPeligroso" value="si" type="radio">NO<input class="checbo" name="mPeligroso" value="no" type="radio">        
										</div>	
										<div class="form-group">
											<label for="exampleFormControlSelect1">Apilable:</label><br>									
											SI<input class="checbo" name="apilable" value="si" type="radio">NO<input class="checbo" name="apilable" value="no" type="radio">      
										</div>					    
										<button type="submit" class="btn btn-success btn-block">Calcular Espacio</button>
								</form>
							</div><!-- /.loginBox -->
			  			</div><!-- /.card -->								
					</div><!-- /.col -->
				</div><!--/.row-->
			</div><!-- /.container -->
			<div class="container">
			</div>
			<hr class="bs-docs-separator">
		</div>
	</div>
<!-- //bootstrap-pop-up -->
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
					<h4>41003-Sevilla, España</h4>
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
					<h4><a href="mailto:trans.al.andalus@gmail.com"> trans.al.andalus@gmail.com</a></h4>
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
	<div class="footer-final">
		<div class="copyw3-agile">
			<div class="container">
				<p>&copy; 2020 Trans Al-Andalus. All rights reserved | Design by <a href="#">Abel Herrero</a></p>
			</div>
		</div>
	</div>
<!-- JS -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
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
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- start-smooth-scrolling -->

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
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
</body>
</html>