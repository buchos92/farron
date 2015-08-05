<?php     
     $conn->get_conectar();
     $sql= 'SELECT * FROM timagenes ORDER BY id DESC';
	 $res=$conn->bd($sql);
	 	 while($filas=mysqli_fetch_array($res)){
		 
		 $id=$filas['id'];
		 $ruta=$filas['Ruta'];
		 $Descripcion=$filas['descripcion'];
?>
    
         <section class="foto">
         <div class="cabeza"><div class="fotocirculo"><img class="lazy"  data-original="<?php echo $ruta; ?>" src="imagenes/cargandoGif.gif"><a href=""><h1>farronArtes</h1></a></div></div>
         <div class="photo"><img class="lazy" data-original="<?php echo $ruta; ?>" src="imagenes/cargandoGif.gif"></div>
         <div class="comment comentario" >
         <p ><?php echo $Descripcion?></p>
         <?php 
             
			 $sqlc= "SELECT * FROM comentarios WHERE imagen='$id' ORDER BY id ASC LIMIT 3";
			 $sqln= "SELECT * FROM comentarios WHERE imagen='$id'";
			 $resc= $conn->bd($sqlc);
			 $resn= $conn->bd($sqln);
			 $numc=mysqli_num_rows($resn);
			 
			     while($rowc=mysqli_fetch_array($resc)){;            
              
         ?> 
         <p ><?php echo $rowc['comentario'] ?></p>
         <?php }?>                
         <p ><a href="index.php?n=<?php echo $id ?>">Ver todo los comentarios..</a></p>        
         <p id="compartir">
                <a href="index.php?n=<?php echo $id ?>"><img src="imagenes/coment.png" /><?php echo $numc?></a>
                <a href="http://www.facebook.com/sharer.php?u=http://www.farronartes.16mb.com/index.php&t=Farron Artes"><img src="imagenes/compartir.png" /></a>
         </p>
         
			 
             
         </div>
         </section>
    
		 <?php
        
          }
           
         ?>
	 
         