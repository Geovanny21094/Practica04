<!DOCTYPE html>
 <html> 
     <head> 
             <meta charset="UTF-8">   
               <title>Modificar datos de persona</title> 
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
 

 <form id="formulario01" method="POST" action="../controladores/modificar_usuario.php"> 

                                         <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" /> 

 
                
 

                    <label for="nombres">Nombres (*)</label>      
                                   <input type="text" id="nombres" name="nombres" value="<?php echo $row["user_nombre"]; ?>" required placeholder="Ingrese los dos nombres ..."/> 
                                                       <br> 
 
                    <label for="apellidos">Apellidos (*)</label> 
                                        <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["user_apellido"]; ?>" required placeholder="Ingrese los dos apellidos ..."/>          
                                                   <br> 

 
                    <label for="correo">Correo (*)</label>    
                                     <input type="text" id="correo" name="correo" value="<?php echo $row["user_email"]; ?>" required placeholder="Ingrese la dirección ..."/>      
                                                    <br> 
 
                    <label for="rango">Rango (*)</label>    
                                     <input type="text" id="rango" name="rango" value="<?php echo $row["user_rol"]; ?>" required placeholder="Ingrese el teléfono ..."/>       
                                                   <br>                 
 
                  
                                                      <input type="submit" id="modificar" name="modificar" value="Modificar" />  
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