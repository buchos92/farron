<?php
	
	$RutaServidor= 'ImagenesSubidas';
	$rutaTemporal=$_FILES['foto']['tmp_name'];
	$NombreImagen=$_FILES['foto']['name'];
	$rutaDestino= $RutaServidor.'/'.$NombreImagen;
	move_uploaded_file($rutaTemporal,$rutaDestino);
	$des=$_POST ['descripcion'];
		require ("conexion.php");
		$conn= new coneccion();
		$conn->get_conectar();
		$sql="INSERT INTO timagenes VALUES ('','$rutaDestino','$des')";	
		$conn->bd($sql);						
		mysqli_query ($conn,$sql);
		header("Location: index.php"); 
							



?>

