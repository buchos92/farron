<?php 
require_once("conexion.php");
$conn= new coneccion();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FarronArtes</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:title" content="Farron Artes " />
<meta property="og:description" content="Sube tus mejores fotos de FARRA :D " />
<meta property="og:image" content="imagenes/portada.jpg" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="estilos/mi estilo 1.css">
<link rel="stylesheet" type="text/css" href="estilos/input.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
     $("img.lazy").lazyload({
         effect : "fadeIn"
     });

  });
  </script>
<script src="js/micode.js"></script>
<script src="js/codeimput.js"></script>
<script>
    
	$(document).ready(function() {
		$(window).scrollTop(1);
		$("#inputfoto").validate();
		
	});
</script>

</head>

