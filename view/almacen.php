<!doctype html>
<html lang="en">
  <head>
    <title>Añadir Datos Almacen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid text-center">
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="../images/logo.PNG" class="img-responsive" alt="PHP MySQL logos">
							<h2>Añadir Almacen</h2>
							<form action="almacen.php" method="post">                           	
                  <div class="form-group">									
                    <input type="text" class="form-control input-lg" name="nombre"  placeholder="Nombre almacen" required>        
                  </div>							
                  <div class="form-group">        
                    <input type="number" class="form-control input-lg" name="cuadrado" placeholder="Metro Cuadrados" min="0" required>
                    <span class="help-block">Para calcular los metros cuadras se multiplica (lado x ancho) los metros cuadrados.</span><br>
                    <span class="help-block">Haz de saber que tienes que tener las medida de la altura del almacen para los metros cubicos</span>       
                  </div>
                  <div class="form-group">									
                    <input type="number" class="form-control input-lg" name="cubicos"  placeholder="Metros Cubicos" min="0" required>
                    <span class="help-block">Para calcular los metros cubicos se multiplica (lado x ancho x altura) los metros cuadrados</span>               
                  </div>
                  <div class="form-group">									
                    <input type="number" class="form-control input-lg" name="stock_ocupado"  placeholder="Stock Ocupado" min="0" required>            
                  </div>
                  <div class="form-group">									
									  <input type="text" class="form-control input-lg" name="direccion"  placeholder="Dirección" required>        
                  </div>
                  <div class="form-group">									
									  <input type="text" class="form-control input-lg" name="m_Peligroso"  placeholder="Material Peligroso" required>        
                  </div>							    
									<button type="submit" class="btn btn-success btn-block">Insertar Almacen</button>
							</form>								
						</div><!-- /.loginBox -->	
          </div><!-- /.card -->
          <a href="../controllers/edit-profile.php" class="btn bg-primary m-4 text-center">Atras</a>									
           <a href="../controllers/logout.php" class="btn bg-primary m-4 text-center">Cerrar Sesión</a>								
				</div><!-- /.col -->
			</div><!--/.row-->
    </div><!-- /.container -->
<?php
  //Importar la BD
  require '../models/conn.php';

  //Conexion a la BD
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Mensaje de conectado
  //echo "Connected successfully";

  // Comprobar la conexion a la BD
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Variables para recoger los datos del formulario
  if(isset($_POST['nombre'], $_POST['cuadrado'], $_POST['cubicos'], $_POST['m_Peligroso'], $_POST['direccion'])){
    $nombre_almacen = $_POST['nombre'];
    $m_cuadrados = $_POST['cuadrado'];
    $m_cubicos = $_POST['cubicos'];
    $stock = $_POST['stock_ocupado'];
    $materiales_peligroso = $_POST['m_Peligroso'];
    $direccion = $_POST['direccion'];
    //Sentencia para insertar los datos en la BD
    $sql ="INSERT INTO logistica (nombre_almacen, m_cuadrados, m_cubicos,stock_ocupado, materiales_peligroso, direccion) VALUES ('$nombre_almacen', $m_cuadrados, $m_cubicos,$stock ,'$materiales_peligroso', '$direccion')";

    if($conn->query($sql) === true){
      echo "<div class='alert alert-success mt-4 text-center' role='alert'><h3>Los datos han sido enviados.</h3>
      <a class='btn btn-outline-primary' href='../controllers/edit-profile.php' role='button'>Iniciar Sesion</a></div>";
    }else{
      die("Error la insertar los datos en la BD" .$conn->error);
    }
  }
  // Cerrar la conexión
  mysqli_close($conn);
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
