<?php 
include('conexion.php');
$Numero_Documento=$_GET['Numero_Documento'];
$actualizar="UPDATE `clientes` SET `Activar_Registro`='0' WHERE `Numero_Documento`='$Numero_Documento'";
$consultasql=mysqli_query($conec,$actualizar);
if ($consultasql) {
	echo "<script>alert('Eliminacion Exitosa')</script>";
		header("refresh: 0.5 ; url = ver-clientes.php");
}

?>