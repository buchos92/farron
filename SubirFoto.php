<?php include "Comunes/head.php"; ?>
<body>
   <header>
        <nav>
         <div id="volver"><a href="index.php"><img class="lazy" data-original="imagenes/back.png" src="imagenes/back.png"/></a> </div>
         <div id="sub"><a href="#"><h1>PUBLICAR FOTO</h1></a></div>
        </nav>
</header>
  
  
  <section class="foto" id="sub1">
                 
     <form id="formulario" method="post" enctype="multipart/form-data" name="botonFoto" action="ProcesoFoto.php">
       
        <div id="divenviar">     
          <p id="te"><img id="fotoC" src="imagenes/FOTOSUB.png" width="80" height="80"></p>
          <input type="file" id="inputfoto" accept="image/*" name="foto">
        </div>   
        <textarea cols="5" rows="10" type="text" id="descripcion" name="descripcion" ></textarea> 
        <input type="submit" id="botonEnviar" class="s" name="BotonFoto" value="Publicar"  />
        
     </form>
  
  </section>
  
   
  
<footer></footer>

</body>
</html>
