<?php
$Nombre_Cliente=$_POST['Nombre_Cliente'];
$Numero_Documento=$_POST['Numero_Documento'];
$Email=$_POST['Email'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
$Fecha_Creacion=$_POST['Fecha_Creacion'];
include('conexion.php');
//consulta
$sql="INSERT INTO `clientes`(`Nombre_Cliente`, `Numero_Documento`, `Email`, `Fecha_Nacimiento`, `Fecha_Creacion`) VALUES ('$Nombre_Cliente','$Numero_Documento','$Email','$Fecha_Nacimiento','$Fecha_Creacion')";
  if (mysqli_query($conec,$sql)) {
    echo "<script>alert('Registro Exitoso')</script>";
  } else {
    echo "<script>alert('Error!!! No se pudo registrar')</script>";
  }
    

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo-cliente.css">

    <title>Cliente</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Documento</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha De Nacimiento</th>
      <th scope="col">Fecha De Creacion</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      //consulta para ver clientes
      $consulta = "SELECT * FROM `clientes` WHERE Activar_Registro=1";
      $resultados = mysqli_query($conec, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");

     ?>
     <!-- Ciclo que permite mostrar los registros de la tabla por medio de un arrego -->
     <?php while ($row=mysqli_fetch_array($resultados)) { ?>
    <tr>
      <th scope="row"><?php echo $row['#']; ?></th>
      <td><?php echo $row['Nombre_Cliente']; ?></td>
      <td><?php echo $row['Numero_Documento']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Fecha_Nacimiento']; ?></td>
      <td><?php echo $row['Fecha_Creacion']; ?></td>
      <td><a href="editar-cliente.php?Numero_Documento=<?php echo $row['Numero_Documento'] ?>">Editar</a></td>
      <td><a href="eliminar-cliente.php?Numero_Documento=<?php echo $row['Numero_Documento'] ?>">Eliminar</a></td>
      <?php } ?>
    </tr>
    </tbody>
    </table>
    <div class="row">
      <div class="col-12">
          <button type="button" class="btn btn-danger"><a href="index.php">VOLVER</a></button>
      </div>
    </div>
   
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
    
   
  </body>
</html>