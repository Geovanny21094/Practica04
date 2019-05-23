<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>INDEX ADMINISTRADOR</title>
	<link href="../../css/index_admin.css" rel="stylesheet" type="text/css"/>
</head>

<body>

	<?php
	session_start();
	if (!isset($_SESSION['isLoggedAdmin']) || $_SESSION['isLoggedAdmin'] === FALSE) {
		header("Location: ../../login/login.php");
	}
	
	?>

	<header>
		<table id="tabla1">
		<tr>
		
		
		<th><a href="lista_usuarios.php">LISTAR USUARIOS</a></th>
		
		<th><a href="../../login/login.php">CERRAR SESION</a></th>
		</tr>
</table>
	</header><br><br>


	<table style="width: 100%" border="4" id="mensajes">
		<tr>
			<th>REMITENTE</th>
			<th>DESTINATARIO</th>
			<th>ASUNTO</th>
			<th>MENSAJE</th>
			<th>FECHA ENVIO</th>
			<th colspan="2">ACCIONES</th> 
			
		</tr>


	<?php
	include('../../config/conexionDB.php');

	$sql = "SELECT * from mensajes;";
	$result = $conn->query($sql);




	if ($result->num_rows > 0) {


		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			//echo ("<td>" . $row["mens_id"] . "</td>");
			echo ("<td>" . $row["men_remitente"] . "</td>");
			echo ("<td>" . $row["men_destinatario"] . "</td>");
			echo ("<td>" . $row["men_asunto"] . "</td>");
			echo ("<td>" . $row["men_mensaje"] . "</td>");
			echo ("<td>" . $row["men_fechaEnvio"] . "</td>");
			echo ("<td> <a href = ../controladores/abrirmensaje.php?codigo=" . $row['men_id'] . ">LEER</a>" . " </td>");
			echo ("</tr>");
		}
	} else {
		echo "<tr>";
		echo ("<td colspan='6'>No existe ningún mensaje. </td>");
		echo ("</tr>");
		
	}



	$conn->close();
	?>
</table><br><br>

<div id="contacto">
<footer>

            <p>Angel Geovanny Duchitanga Abad</p>
			<p>e-mail:<a href="mailto:aduchitanga@est.ups.edu.ec">aduchitanga@est.ups.edu.ec </a></p>
			<p>© Todos los derechos reservados</p>
    </footer>
	</div>

</body>

</html>