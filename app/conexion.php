<?php
  class conexion{
    public function conectar(){
      /*
      $hostname = 'http://www.paisallantas.com.mxyyyyyyy';
      $database = 'rllantas_blackdish';
      $username = 'rllantas_prod';
      $password = 'PaisaProd1234';
      */
      $hostname = 'localhost';
      $database = 'blackdish';
      $username = 'tester';
      $password = 'testdish';
      $mysqli = new mysqli($hostname, $username,$password, $database);
      if($mysqli -> connect_errno){
        die( "Fallo la conexi贸n a MySQL: (" .$mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
    	   return false;
       }
      else{
    	  return $mysqli;
    	  //echo "conectado";
      }
    }
    #Este metodo devuelve recibe un arreglo y lo codifica en utf8 para no causar problemas en json
    function utf8_converter($array){
      array_walk_recursive($array, function(&$item, $key){
          if(!mb_detect_encoding($item, 'utf-8', true)){
                  $item = utf8_encode($item);
          }
      });
      return $array;
    }
  }


?>
