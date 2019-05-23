<!DOCTYPE html> 
<html>
     <head> 
             <meta charset="UTF-8"> 
                 <title>Mensaje Nuevo</title>  
                    <style type="text/css" rel="stylesheet"> 
                            .error{     
                                        color: red; 
                                                } 
                                                    </style> 
                                                    </head> 
                                                    <body> 

 
    <?php               
      //incluir conexión a la base de datos
               include '../../config/conexionDB.php'; 

              
               $remitente = isset($_POST["remitente"]) ? trim($_POST["remitente"]): null; 
                 $destinatario = isset($_POST["destinatario"]) ? mb_strtoupper(trim($_POST["destinatario"]), 'UTF-8') : null;  
                        $asunto = isset($_POST["asunto"]) ? mb_strtoupper(trim($_POST["asunto"]), 'UTF-8') : null; 
                        $mensaje = isset($_POST["mensaje"]) ? mb_strtoupper(trim($_POST["mensaje"]), 'UTF-8') : null; 
                        $fecha = isset($_POST["fecha"]) ? trim($_POST["fecha"]): null; 
                              $sql = "INSERT INTO mensajes VALUES (0,  '$remitente', '$destinatario', '$asunto', '$mensaje', '$fecha', 'N', null, null)";         

 
        if ($conn->query($sql) === TRUE) {
                         echo "<p>El mensaje se ha enviado correctamente</p>";   
                                   } else { 
                                          if($conn->errno == 1062){   
                                        echo "<p class='error'>El mensaje no se pudo enviar</p>";               
                                       }else{ 

                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";    
                         }  
                                            }      
                                                        //cerrar la base de datos
                                                       $conn->close();
                                                      echo "<a href='../vista/nuevo_mensaje.html'>Regresar</a>";  
                                                                            ?> 
 
</body> 
</html> 