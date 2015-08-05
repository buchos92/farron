
<?php
     class procesos{
		private $RutaServidor='ImagenesSubidas';
		private $rutaTemporal;
		private $NombreImagen;
		private $rutaDestino;     
		
		 function procesofoto(){
			  $this->rutaTemporal=$_FILES['foto']['tmp_name'];
	          $this->NombreImagen=$_FILES['foto']['name'];
			  $this->rutaDestino=$this->RutaServidor.'/'.$this->NombreImagen;
			  move_uploaded_file($this->rutaTemporal,$this->rutaDestino);
					   
			 }
		 
		 }
?>