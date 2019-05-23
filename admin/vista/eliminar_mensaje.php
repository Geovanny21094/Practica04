<!DOCTYPE html> 
<html> 
    <head> 
            <meta charset="UTF-8">   
              <title>Eliminar Mensaje (Administrador)</title>  
               </head> 

 
<body>
         <?php  
                     $codigo = $_GET["codigo"];  
                            $sql = "SELECT * FROM mensajes where men_id=$codigo";   
                                           include '../../config/conexionDB.php';    
                                                 $result = $conn->query($sql);    
                                                               if ($result->num_rows > 0) {     
                                                          while($row = $result->fetch_assoc()) {   
                                                                        ?> 
 

                <form id="formulario01" method="POST" action="../controladores/eliminar_mensajes.php">   
                                  <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" /> 

                    <label for="remitente">Remitente (*)</label>   
                         <input type="text" id="remitente" name="remitente" value="<?php echo $row["men_remitente"]; ?>" disabled/>   
                                           <br> 

 
                    <label for="destinatario">Destinatario (*)</label>   
                                      <input type="text" id="destinatario" name="destinatario" value="<?php echo $row["men_destinatario"]; ?>" disabled/>   
                                             <br> 

 
                    <label for="asunto">Asunto (*)</label> 
                    <input type="text" id="asunto" name="asunto" value="<?php echo $row["men_asunto"]; ?>" disabled/>        
                                 <br> 

 
                    <label for="mensaje">Mensaje (*)</label>  
                                       <input type="text" id="mensaje" name="mensaje" value="<?php echo $row["men_mensaje"]; ?>" disabled/>   
                                                         <br> 

                                                         
                    <label for="fechaEnvio">Fecha envio (*)</label>     
                                    <input type="date" id="fechaEnvio" name="fechaEnvio" value="<?php echo $row["men_fechaEnvio"]; ?>" disabled/> 
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