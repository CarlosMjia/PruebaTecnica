<?php 
include('conexion.php');

$Nombre_Cliente=$_POST['Nombre_Cliente'];
$Numero_Documento=$_POST['Numero_Documento'];
$Email=$_POST['Email'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
$Fecha_Creacion=$_POST['Fecha_Creacion'];

$actualizar="UPDATE `clientes` SET `Nombre_Cliente`='$Nombre_Cliente',`Numero_Documento`='$Numero_Documento',`Email`='$Email',`Fecha_Nacimiento`='$Fecha_Nacimiento',`Fecha_Creacion`='$Fecha_Creacion' WHERE `Numero_Documento`='$Numero_Documento'";
$consultasql=mysqli_query($conec,$actualizar);
if ($consultasql) {
	echo "<script>alert('Edicion Exitosa')</script>";
			header("refresh: 0.5 ; url = ver-clientes.php");
}



?>