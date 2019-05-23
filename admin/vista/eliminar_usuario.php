<!DOCTYPE html> 
<html> 
    <head> 
            <meta charset="UTF-8">   
              <title>Eliminar datos de persona</title>  
              <link href="../../css/eliminar_usuarioVista.css" rel="stylesheet" type="text/css"/>
               </head> 

 
<body>
         <?php  
                     $codigo = $_GET["codigo"];  
                            $sql = "SELECT * FROM usuarios where user_id=$codigo";   
                                           include '../../config/conexionDB.php';    
                                                 $result = $conn->query($sql);    
                                                               if ($result->num_rows > 0) {     
                                                          while($row = $result->fetch_assoc()) {   
                                                                        ?> 
 

               
 <form id="formulario01" method="POST" action="../controladores/eliminar_usuario.php"> 
                                  <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" /> 

                    <label for="correo">Correo (*)</label>   
                         <input type="text" id="correo" name="correo" value="<?php echo $row["user_email"]; ?>" disabled/>   
                                           <br> <br> 

 
                    <label for="nombres">Nombres (*)</label>   
                                      <input type="text" id="nombres" name="nombres" value="<?php echo $row["user_nombre"]; ?>" disabled/>   
                                             <br> <br> 

 
                    <label for="apellidos">Apelidos (*)</label> 
                    <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["user_apellido"]; ?>" disabled/>        
                                 <br> <br> 
    
                                             
                                             <label for="rango">Rango (*)</label>     
                                    <input type="text" id="rango" name="rango" value="<?php echo $row["user_rol"]; ?>" disabled/> 
                                                        <br> 
                                                        <br> 

                                              
                                             <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />     
                                                             <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />   
                                                                          </form>   

 

             <?php          
               }         
               } else {   
                                         echo "<p>Ha ocurrido un error inesperado !</p>";    
                                                  echo "<p>" . mysqli_error($conn) . "</p>";   
                                                        }      
                                                           $conn->close();  
                                                                       ?>     

 
</body>
 </html> 