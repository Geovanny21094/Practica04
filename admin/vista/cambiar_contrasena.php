<!DOCTYPE html> 
<html> 
    <head> 

    <meta charset="UTF-8">    
     <title>Modificar datos de persona</title>    
     <link href="../../css/cambiar_contraseñaVista.css" rel="stylesheet" type="text/css"/>
 </head> 
 
<body> 
        <?php      
           $codigo = $_GET["codigo"];           
             ?> 
 

    <form id="formulario01" method="POST" action="../controladores/cambiar_contrasena.php">      
                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" /> 

                <br> 
        <label for="cedula">Contraseña Actual (*)</label>      
           <input type="password" id="contrasena1" name="contrasena1" value="" required placeholder="Ingrese su contraseña actual ..."/>    
                <br> <br> 
 
        <label for="cedula">Contraseña Nueva (*)</label>     
           <input type="password" id="contrasena2" name="contrasena2" value="" required placeholder="Ingrese su contraseña nueva ..."/>    
                <br>    <br>          
                
                <input type="submit" id="modificar" name="modificar" value="Modificar" />  
                       <input type="reset" id="cancelar" name="cancelar" value="Cancelar" /> 
                        </form>                                 
 
</body> </html>