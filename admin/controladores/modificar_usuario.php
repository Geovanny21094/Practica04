<!DOCTYPE html> 
<html> 
    <head>  
           <meta charset="UTF-8">  
              <title>Modificar datos de persona </title> 
              </head> 
              <body>
                   <?php  
                          //incluir conexión a la base de datos 
                              include '../../config/conexionDB.php';  
 

    $codigo = $_POST["codigo"];
        
            $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
                 $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;  
                    $correo = isset($_POST["correo"]) ? mb_strtoupper(trim($_POST["correo"]), 'UTF-8') : null;
                         $rango = isset($_POST["rango"]) ? trim($_POST["rango"]): null;  

 

 
    date_default_timezone_set("America/Guayaquil");
         $fecha = date('Y-m-d H:i:s', time()); 

         if (" usu_rango = 'USER' "){

          $sql = "UPDATE usuarios " .   
          "SET user_nombre = '$nombres', " . 
                               "user_apellido = '$apellidos', " .       
                                                         "user_email = '$correo', " .    
                                                         "user_rol = '$rango', " .  
                                                                           "usu_fecha_modificacion = '$fecha' " .      
                                                                                 "WHERE user_id = $codigo and user_rol = 'USER'"; 

          
         } else {
          echo "No puede modificar los administradores!!!<br>";  
         }
   
 

    if ($conn->query($sql) === TRUE) {       
          echo "Se ha actualizado los datos personales correctamemte!!!<br>";  
                }
                
                
                
                else { 
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
                                             } 
                                                 echo "<a href='../vista/lista_usuarios.php'>Regresar</a>"; 

 
    $conn->close(); 
         ?>
          </body> 
          </html>