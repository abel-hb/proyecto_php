<?php
session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Marcar Iniciar sesión y crear una sesión</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<?php
			// Archivo de información de conexión de BD
			include '../models/conn.php';	
			// Variables de conexión de BD
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			// Compruebe la conexión.
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// datos enviados desde el formulario login.html 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Consulta enviada a la base de datos
			$result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email' AND Password='$password'");

			//$result1 = mysqli_query($conn, "SELECT Email FROM users WHERE Email = '$email'");
			$cons = mysqli_num_rows($result);

			if($cons > 0){
				// Variable $row mantiene el resultado de la consulta
				$row = mysqli_fetch_assoc($result);
				if ($row['level'] == "user"){
					$_SESSION['email']=$email;
					$_SESSION['level'] = "user";
					$_SESSION['loggedin'] = true;
					$_SESSION['name'] = $row['Name'];
					$_SESSION['start'] = time();
					$_SESSION['expire'] = $_SESSION['start'] + ( 1* 120) ;	
					header("Location:../index.php");
				}else if($row['level'] == "admin"){
							$_SESSION['email']=$email;
							$_SESSION['level'] = "admin";	
							$_SESSION['loggedin'] = true;
							$_SESSION['name'] = $row['Name'];
							$_SESSION['start'] = time();
							$_SESSION['expire'] = $_SESSION['start'] + ( 1* 120) ;	
							header("Location:edit-profile.php");				
				}else{
					echo "<div class='alert alert-danger bg-danger font-weight-bold mt-5 text-center' role='alert'>El correo electrónico o la contraseña son incorrectos!
				 			<p><a href='../login.html'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>";	
				}
			}else{
				echo "<div class='alert alert-danger bg-danger font-weight-bold mt-5 text-center' role='alert'>Los datos introducidos no estan en nuestra base de datos!
						 <p><a href='../login.html'><strong>Por favor, inténtelo de nuevo!</strong></a></p>
						 <p>O</p>
						 <p><a href='../registro.html'><strong>Registrate Aquí!</strong></a></p></div>";	
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