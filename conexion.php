<?php
		class coneccion{
			      private $servername;
				  private $username;
				  private $password ;
				  private  $dbname ;
				  private $conn;
				  private $query;
			  
			  function __construct(){
				  $this->servername="localhost";
				  $this->username="root";
				  $this->password="";
				  $this->dbname="farronartes";
	              }
		      private function conectar(){
				  $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
				  return $this->conn;		         
		          }
			  public function bd($sql){
				  $this->query= mysqli_query( $this->conn ,$sql);
				  return $this->query;
				  }
				 
			  public function get_conectar(){
			      
				  return $this->conectar();
			      }
		}      		  
		
		
		function quitar($str){
			
			$no_permitidos = array("","/","SELECT","FROM","'","*","="," ");
			return str_replace($no_permitidos,"","$str");
			
			}
?>