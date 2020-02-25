<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Editar la página de perfil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   <link href="../css/font-awesome.css" rel="stylesheet">  
</head>
  
  <body>      
    <?php
    if (isset($_SESSION['loggedin'])) {  
    }else {
        echo "<div class='alert alert-danger mt-4 text-center' role='alert'>
        <h4>Necesitas iniciar sesión para acceder a esta página.</h4>
        <p><a href='../login.html'>Entra aquí!</a></p></div>";
        exit;
    }
       // comprobando el momento en que se inicia la pagina check-login.php
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger bg-danger font-weight-bold mt-5 text-center' role='alert'>
        <h4>¡Tu sesión ha expirado!</h4>
        <p><a href='../login.html'>Entra aquí</a></p></div>";
        exit;
        }
    ?>
    <div class="container">
        <h2 class="text-justify ">Bienvenido: <?php echo $_SESSION['name']; ?></h2>
        <h3 class="display-4 text-center bg-success">Pagina de Administración</h3>
        <div class="list-group-flush">
            <div class="list-group-item text-center">
                <p class="mb-0"><i class="fas fa-industry fa-2x mr-4 blue p-3 white-text rounded " aria-hidden="true"></i><a href="../view/almacen.php">Añadir Almacen.</a></p>
            </div>
            <div class="list-group-item text-center">
                <p class="mb-0"> <i class="fas fa-box-open fa-2x mr-4 mr-4 red p-3 white-text rounded" aria-hidden="true"></i><a href="../view/embalaje.php">Tipo de Embalaje.</a></p>
            </div>
            <div class="list-group-item text-center">
                <p class="mb-0"><i class="fas fa-key fa-2x mr-4 mr-4 purple p-3 white-text rounded" aria-hidden="true"></i><a class="" href="../view/recovery.php">Cambiar Contraseña.</a></p>
            </div>
            <div class="list-group-item text-center">
                <p class="mb-0"><i class="fas fa-cog fa-2x mr-4 mr-4 purple p-3 white-text rounded" aria-hidden="true"></i><a href="#">Otras Propiedades</a></p>
            </div>
        </div>
        <br>
        <a href="logout.php" class="btn bg-dark m-4 text-center">Cerrar Sesión</a>									
    </div>
    <script src="https://kit.fontawesome.com/e13faebda0.js" crossorigin="anonymous"></script>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>