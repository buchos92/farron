<?php

		  $com=$_POST ['ComentarioFoto'];
		  $id=$_POST ['post'];
		  
		  require ("conexion.php");
		  
		  $conn= new coneccion();
		  $conn->get_conectar();
		  $sql="INSERT INTO comentarios VALUES ('','$com','','$id')";
		  $conn->bd($sql);							
		  mysqli_query ($conn,$sql);
		  header("Location: index.php?n=$id");
							



?>