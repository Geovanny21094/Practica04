
<?php 
    session_start();  
       if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){    
                        
                                 } 
                                 ?>







<!DOCTYPE html> 

<html>
     <head> 
       <meta charset="UTF-8">
       <link href="../../css/lista_usuarios.css" rel="stylesheet" type="text/css"/>
            <title>Gestión de usuarios</title> 
        </head>
         <body> 
         <br><br> 
                      <table style="width:100%" border="4" id="mensajes">
                               <tr> 
                           <th>Correo</th> 
                         <th>Nombres</th> 
                           <th>Apellidos</th>   
                        <th>Rango</th>  
                        
                     
                                        </tr> 

 
        <?php  
                   include '../../config/conexionDB.php';    
                             $sql = "SELECT * FROM usuarios";    
                                      $result = $conn->query($sql);  
                                           if ($result->num_rows > 0) {  
                                              while($row = $result->fetch_assoc()) {   
                                                       echo "<tr>"; 
                                                       echo "   <td>" . $row["user_email"] . "</td>";

                    echo "   <td>" . $row['user_nombre'] ."</td>";  
                           echo "   <td>" . $row['user_apellido'] . "</td>";    
                                          echo "   <td>" . $row['user_rol'] . "</td>";   
                                          
                                          echo "   <td> <a href='../vista/eliminar_usuario.php?codigo=" . $row['user_id'] . "'>Eliminar</a> </td>";   
                                           echo "   <td> <a href='modificar_usuario.php?codigo=" . $row['user_id'] . "'>Modificar</a> </td>"; 
                                              echo "   <td> <a href='cambiar_contrasena.php?codigo=" . $row['user_id'] . "'>Cambiar contraseña</a> </td>";   
                                               echo "</tr>";   
                                                          }     
                                                                } else {   
                                                               echo "<tr>"; 
                                             echo "   <td colspan='7'> No existen usuarios registradas en el sistema </td>";              
                                                echo "</tr>"; 

 
            }       

          
                  $conn->close();   
                                 ?>  
                                    </table>  <br>
                                    <a href= "index.php">Atras</a><br><br><br>
                                    <a href= "login_administrador.php">Cerrar sesion</a>




                                    <div id="contacto">
    <footer>
       
        <p>Angel Geovanny Duchitanga Abad</p>
        <p>e-mail:<a href="mailto:aduchitanga@est.ups.edu.ec">aduchitanga@est.ups.edu.ec </a></p>
        <p>© Todos los derechos reservados</p>
</footer>

 
</body> 
</html>