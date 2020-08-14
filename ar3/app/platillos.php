<?php
require 'conexion.php';

        class platillos{
            
            public function restPuntoCafe($idRestaurante){
                
                                        $con = new conexion();
                                        $conn = $con -> conectar();
                                        
                                        $sql = $conn ->query("SELECT nombre, descripcion, costo, imagenPlatillos FROM platillos WHERE idRestaurante = '$idRestaurante';");
                                        if($sql){
                                            //echo "true";
                                            /* 0 =nombre ,1 =descripcion ,2 =costo ,3 =imagenPlatillos  */
                                                while($row = $sql -> fetch_array(MYSQLI_NUM) ){
                                                   printf ($row[0]."\t".$row[1]."\t".$row[2]."\t".$row[3]);
                                                    }
                                        }else{
                                            return "error";
                                        }
                        }
                        
                        
            public function restSky($idRestaurante){
                
                                        $con = new conexion();
                                        $conn = $con -> conectar();  
                                        
                                         $sql = $conn ->query("SELECT nombre, descripcion, costo, imagenPlatillos FROM platillos WHERE idRestaurante = '$idRestaurante';");
                                            if($sql){
                                               //echo "true";
                                              /* 0 =nombre ,1 =descripcion ,2 =costo ,3 =imagenPlatillos  */
                                               while($row = $sql -> fetch_array(MYSQLI_NUM) ){
                                                   printf ($row[0]."\t".$row[1]."\t".$row[2]."\t".$row[3]);
                                                 }
                                             }else{
                                                return "error";
                                          }
            }
        }
?>