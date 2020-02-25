<!doctype html>
<html lang="en">
	<head>		
    	<title>Password Recovery</title>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
		<?php
			//Importar la BD
			include '../models/conn.php';
			//Variables
			$email = $_POST['email'];
			//Conexion a la BD				
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Comprobar la conexion a la BD
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			//Sentencia para buscar los datos en la BD	
			$sql = "SELECT Email, Password FROM users WHERE Email='$email'";				
			$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				ini_set( 'display_errors', 1 );
				error_reporting( E_ALL );
				$para      = 'trans.al.andalus@gmail.com';
				$titulo    = 'Cambio de Contraseña';
				$mensaje   = 'Hola Buenas.'."\n".
							'Su contraseña es:' . $row['Password'];
				$cabeceras = 'From: trans.al.andalus@gmail.com' . "\r\n" .
					'Reply-To: trans.al.andalus@gmail.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
				mail($para, $titulo, $mensaje, $cabeceras);
    			echo "The email message was sent.";
				echo "<div class='alert alert-success alert-dismissible mt-4 text-center' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<p>¡Se envió un correo electrónico! Por favor, compruebe su correo electrónico.</p>
				<p><a class='alert-link' href=../login.html>Iniciar Sesion</a></p></div>";
			} else {
				echo "<div class='alert alert-danger bg-danger font-weight-bold mt-5 text-center' role='alert'>Lo sentimos, pero ese correo electrónico no está en nuestra base de datos!
				<p><a href='../login.html'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>";	
			}
		?>
		</div>
	</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>