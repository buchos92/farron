<?php
     $idP=quitar($_GET['n']);
	 $conn->get_conectar();
     $sql= "SELECT * FROM timagenes WHERE id='$idP'";
	 $res= $conn->bd($sql);    
	 $num=mysqli_num_rows($res); 
	 if($num==0){
		 
		 
		 echo "<center>No se encuentra la foto</center>";
		 
		 }else{
	 $filas=mysqli_fetch_array($res);
	 $ruta=$filas['Ruta'];
     $Descripcion=$filas['descripcion'];
	 
	 
        		
?>
    
  <section class="foto">
         <div class="cabeza"><div class="fotocirculo"><img class="lazy" data-original="<?php echo $ruta; ?>" src="imagenes/cargandoGif.gif"><a href=""><h1>farronArtes</h1></a></div></div>
         <div class="photo"><img class="lazy" src="imagenes/cargandoGif.gif" data-original="<?php echo $ruta; ?>"></div>
         <div class="comment comentario" >
         <p ><?php echo $Descripcion;?></p>
			 <?php 
             $sql= "SELECT * FROM comentarios WHERE imagen='$idP' ORDER BY id ASC ";
             $res= $conn->bd($sql);
             
             while($row=mysqli_fetch_array($res)){	 
             ?> 
             <p ><?php echo $row['comentario'] ?></p>
             
			 <?php 
             }	
             ?>
    
     <?php
	
	    }
		
     ?> 
     
    <p ><form id="formulario" method="post" enctype="multipart/form-data" name="botonFoto" action="ProcesoComentario.php">
                 
             <input type="hidden" name="post" value="<?php echo $idP ?>"  />
             <textarea cols="50" rows="1" type="text" id="comenFoto" name="ComentarioFoto"  placeholder="Comentar..."></textarea>
             
             <input type="submit" id="botonEnviar" name="BotonFoto" value="Comentar"  />
    </form></p>
        </div>
         
  </section>