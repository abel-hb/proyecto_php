<!doctype html>
<html lang="en">
  <head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    //importamos la BD
    include 'models/conn.php';	

    // Variables de conexión de BD
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Compruebe la conexión.
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
    // Variable que nos traemos con el post desde el formulario
    $cantidad= $_POST['cantidad'];
    $carga = $_POST['carga'];
    $product = $_POST['producto'];
    $almacen=$_POST['almacen'];


    //Comprobamos si ha introducido un almacen
    if(isset($_POST['almacen'])){
        // Consulta enviada a la base de datos
        $dimension = mysqli_query($conn, "SELECT nombre_almacen,m_cuadrados,m_cubicos FROM logistica WHERE nombre_almacen = '$almacen'");
       // echo "Almacen Seleccionado";
        //echo $almacen;
    }else{
        echo "<div class='alert alert-danger bg-primary font-weight-bold mt-5 text-center' role='alert'>El Almacen no Seleccionado.!
        <p><a href='sevilla.php'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>";
    }

    
    if(isset($_POST['cantidad'])){
        //echo "Cantidad Seleccionada<br>";
    }else{
        echo "cantidad no Seleccionado.";
        echo "<div class='alert alert-danger bg-warning font-weight-bold mt-5 text-center' role='alert'>La cantidad no ha sido Seleccionada.!
        <p><a href='sevilla.php'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>";
    }
    
    // Consulta a la bd para traer todos los datos del embalaje seleccionado en el checkbox
    $sql = "SELECT * FROM embalaje WHERE tipo_embalaje = '$carga'";
    // hacemos la consulta
    $result = mysqli_query($conn, $sql);
    //Metemos el resultado en un Arrray
    $row = mysqli_fetch_array($result);
    // Multiplicamos para ver cuento m-cubicos es el pedido que ha echo el cliente
    $capacidadCaja=$row['m_cubicos']*$cantidad;
    //Pintamos el array para ver que los datos estan correcto
    //print_r($row);
    //Mostramos los resultado de la multiplicacion
    //echo "Has Seleccionado el Caja"."<br>";
    //echo "La cantidad de ".$product ." en caja para tu carga son: ".$capacidadCaja." ".$carga ."<br>";
    
    //Consulta a la bd para traer todos los datos del almacen seleccionado
    $sql = "SELECT * FROM logistica WHERE nombre_almacen = '$almacen'";
    // hacemos la consulta
    $result = mysqli_query($conn, $sql);
    //Metemos el resultado en un Arrray
    $row = mysqli_fetch_array($result);
    print_r($row);
    // Guardamos en la variable los metros cubicos del almacen y el stock del almacen
    $capacidadInicial=$row['m_cubicos'];
    $stockOcupado=$row['stock_ocupado'];
    //print_r($capacidadInicial);
    //print_r($stockOcupado);
    //Restamos la cantidad inicial menos la del stock que habia
    $espacioDisponible=$capacidadInicial-$stockOcupado;
    // Comprobamos que se ha restado el paso anterior y que tenemos stock 
    // si hay stock pues actualizamos los datos del stock Ocupado
    if($espacioDisponible-$capacidadCaja>=0){
        $actualizarEspacio=$stockOcupado+$capacidadCaja;
        $sql = "UPDATE logistica SET stock_ocupado='$actualizarEspacio' WHERE nombre_almacen='$almacen'";

        if (mysqli_query($conn, $sql)) {
            //echo "Record updated successfully";
            echo "<div class='alert alert-success mt-4 text-center' role='alert'><h3>Registro/Pedido actualizado con éxito</h3>
            <a class='btn btn-outline-primary' href='Sevilla.php' role='button'>Volver</a></div>";
        } else {
            //echo "Error updating record: " . mysqli_error($conn);
            echo "<div class='alert alert-info bg-info font-weight-bold mt-5 text-center' role='alert'>Error al actualizar el registro:
            <p><a href='sevilla.php'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>". mysqli_error($conn);
        }
    }else{
        echo "<div class='alert alert-dark bg-warning font-weight-bold mt-5 text-center' role='alert'>No hay espacio sufiente en este almacen!
        <p><a href='sevilla.php'><strong>Por favor, inténtelo de nuevo!</strong></a></p></div>";
    }
    $consul = "INSERT INTO juan.registro (nombre_almacen, material_peligroso, dirrecion,stock_ocupado) SELECT * FROM juan.logistica ";
    $consul = "INSERT INTO juan.registro (tipo_embalaje) SELECT * FROM juan.embalaje ";
?>
    <div class="page-header">
        <h3 class="bars text-center">Tabla de Resultados</h3>
        <p class="text-center">Aquí te mostraremos los resultados del calcular el espacio en el almacen seleccionado.</p>
	</div>
    <img src="images/logo.PNG"class="text-center" alt="PHP MySQL logos">         
    <hr>
	<div class="bs-docs-example">
				<table class="table text-center">
					<thead class="table text-dark">
						<tr>
                            <th>#</th>
							<th>Almacén</th>
							<th>Tipo Embalaje</th>
                            <th>Producto</th>
							<th>Cantidad</th>
                            <th>Material Peligroso</th>
                            <th>Apilable</th>
                            <th>Dirección almacén</th>
                            <th>Imprimir Factura</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
							<td>#</td>
							<td><?php echo $almacen ?></td>
							<td><?php echo $carga ?></td>
                            <td><?php echo $_POST['producto'] ?></td>
							<td><?php echo $cantidad ?></td>
                            <td><?php echo $_POST['mPeligroso']?></td>
                            <td><?php echo $_POST['apilable'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td><a href="factura.php"><i class="fa fa-print" aria-hidden="true"></i></a></li></td>
                        </tr>
					</tbody>
                </table>
	</div>
    <!-- Optional JavaScript -->
    <script src="https://kit.fontawesome.com/e13faebda0.js" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

