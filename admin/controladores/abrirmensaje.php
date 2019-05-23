<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>ADMINISTRADOR</title>
  <link href="../../css/abrir_mensaje.css" rel="stylesheet" type="text/css"/>
</head>

<body>

	<?php
	session_start();
	if (!isset($_SESSION['isLoggedAdmin']) || $_SESSION['isLoggedAdmin'] === FALSE) {
		header("Location: ../../login/login.php");
	}

	?>

<br>
<br>
<br>


	<table style="width: 100%" border="4">



		<?php
		include('../../config/conexionDB.php');

		$sql = "SELECT * from mensajes where men_id=$_GET[codigo];";
		$result = $conn->query($sql);


		

		if ($result->num_rows > 0) {


			while ($row = $result->fetch_assoc()) {
				
				
				
				echo "<tr>";
				echo ("<th>ASUNTO:</th>");
				echo ("<td>" . $row["men_asunto"] . "</td>");
				echo ("</tr>");
				echo "<tr>";
				echo ("<th>MENSAJE:</th>");
				echo ("<td>" . $row["men_mensaje"] . "</td>");
				echo ("</tr>");
				echo "<tr>";
				
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
<div id="link">
	<a href="../vista/index.php">REGRESAR</a>
	</div>


	<div id="contacto">
	<footer>
	
            <p>Angel Geovanny Duchitanga Abad</p>
			<p>e-mail:<a href="mailto:aduchitanga@est.ups.edu.ec">aduchitanga@est.ups.edu.ec </a></p>
			<p>© Todos los derechos reservados</p>
	</footer>
	</div>

</body>

</html>