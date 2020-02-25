<!doctype html>
<html lang="en">
  <head>
    <title>Crear una cuenta en la base de datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<body>
<div class="container">
	<?php
	//Importar la BD
	include '../models/conn.php';

	//Conexion a la BD
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Compruebe la conexión.
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Consulta para comprobar si el correo electrónico ya existe
	$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";

	// Variable $result mantiene los datos de conexión y la consulta
	$result = $conn-> query($checkEmail);

	// Variable $count mantiene el resultado de la consulta
	$count = mysqli_num_rows($result);

	// If count == 1 eso significa que el correo electrónico ya está en la base de datos
	if ($count == 1) {
	echo "<div class='alert alert-danger bg-danger mt-4 text-center' role='alert'>
					<p>Ese correo electrónico ya está en nuestra base de datos.</p>
					<p><a href='../login.html'>Por favor, inicie sesión aquí</a></p>
		</div>";
	} else {	
	
	/*
	If el correo electrónico no existe, los datos del formulario se envían a la base de datos y se crea la cuenta
	*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$rol = $_POST['level'];
	
	// Consulta para enviar el nombre, el correo electrónico y la contraseña a la base de datos
	$query = "INSERT INTO users (Name, Email, Password, level) VALUES ('$name', '$email', '$pass','$rol')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success mt-4 text-center' role='alert'><h3>Su cuenta ha sido creada.</h3>
		<a class='btn btn-outline-primary' href='../login.html' role='button'>Iniciar Sesion</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>
	<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>