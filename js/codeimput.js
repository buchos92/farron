// JavaScript Document

$(document).ready(function(e) {
	
	
	     $("input:file").change(function(){
					  
					  $("#fotoC").attr("src","imagenes/Listo.png");
					  
					  });
	
		$("#botonEnviar").click(function(){
		     
			 
		     var foto=$("#inputfoto").val();
			 var des=$("#descripcion").val();
			 	
			     				  			 
			      if(foto == ""){
				            
							$("#fotoC").attr("src","imagenes/fotoC.png");
								
						return false;		
				      }else{
						  
				               if(des == ""){
							   					  
								  $("#descripcion").css({"background-color":" #F5A5B3"});				     							  return false;
							  
							   }	
							  
						}
				$("#fotoC").attr("src","imagenes/cargarSub.gif");
					$("#fotoC").attr("width","100");	
					$("#fotoC").attr("height","100");										 
			        $("#descripcion").hide();
			        $(".s").attr("value","Cargando...");
			    		  				  
						    
            });
				 
	     $("#botonEnviar").click(function(){
			 
			 
			     var comen=$("#comenFoto").val();
				 
				 if(comen == ""){
				            
							$("#comenFoto").css({"background-color":" rgba(106,0,0,.9)"});
								
						return false;		
				      }
				
			        	
			 	$("#botonEnviar").attr("value","Cargando...");
			 
			 });
		
	});
	