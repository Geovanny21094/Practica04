<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>MENSAJES DEL USUARIO</title>
</head>

<body>

	<?php
	session_start();
	if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE) {
		header("Location: ../../login/login.php");
	}
	
	?>

	


	<table style="width: 100%" border="1">
		
    

	<?php
    include('../../config/conexionDB.php');
    
    $cod = $_GET["codigo"];
    
	$sql = "SELECT * from mensajes where men_id=$cod;";
	$result = $conn->query($sql);




	if ($result->num_rows > 0) {

        
		while ($row = $result->fetch_assoc()) {
            $codigo = $row["men_id"];
            $remite = $row["men_remitente"];
            $destino = $row["men_destinatario"];
            $asunto = $row["men_asunto"];
            $mensaje = $row["men_mensaje"];
            $fecEnv = $row["men_fechaEnvio"];

			echo "<tr>";
            //echo ("<td>" . $row["mens_id"] . "</td>");
            echo ("<th>REMITENTE</th>");
            echo ("<td>" . $remite . "</td>");
            echo ("</tr>");
            echo "<tr>";
            echo ("<th>DESTINATARIO</th>");
            echo ("<td>" . $destino . "</td>");
            echo ("</tr>");
            echo "<tr>";
            echo ("<th>ASUNTO</th>");
            echo ("<td>" . $asunto . "</td>");
            echo ("</tr>");
            echo "<tr>";
            echo ("<th>MENSAJE</th>");
            echo ("<td>" . $mensaje . "</td>");
            echo ("</tr>");
            echo "<tr>";
            echo ("<th>FECHA ENVIO</th>");
            echo ("<td>" . $fecEnv . "</td>");
            echo ("</tr>");
            echo "<tr >";
            echo ("<th colspan=2> <a href = ../vista/eliminar_mensaje.php?codigo=" . $row['men_id'] . ">Eliminar mensaje</a>" . " </th>");
			echo ("</tr>");
            
           
		}
	} else {
		echo "<tr>";
		echo ("<td colspan='7'>No existe ningún mensaje. </td>");
		echo ("</tr>");
	}

	

	$conn->close();
    ?>

	</table>

<br><br><br>
<a href="../vista/index.php">REGRESAR</a>
    

</body>

</html>