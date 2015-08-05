<?php include "Comunes/head.php"; ?>

<body>
    <?php include_once("Comunes/analyticstracking.php") ?>  
   <?php  ?>
   <?php
    
     
	 if(isset($_GET['n'])){
		 include "Comunes/haderComentarios.php";
         include "mostrar_fotosola.php";
	 }else{
		  include "Comunes/header.php";
		  include "mostrar.php";
		 }
    
	
   ?>
    

<?php include "Comunes/footer.php"; ?>
</body>
</html>
