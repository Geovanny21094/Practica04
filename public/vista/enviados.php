<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mensajes Enviados</title>
</head>

<body>


    <h1></h1>

    <?php

    session_start();
    if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE) {
        header("Location: ../../login/login.php");
    }

    echo "<header>";
    echo "<a href= index.php?mail=$_GET[mail]> MENSAJES RECIBIDOS </a>";
    echo "<br/>";
    echo "<a href= enviados.php?mail=$_GET[mail]>MENSAJES ENVIADOS</a>";
    echo "<br/>";
    echo "<a href= ../../login/login.php>CERRAR SESION</a><br>";
    echo "<br/>";
    echo "</header>";

    ?>



    <table style="width: 100%" border="1">
        <tr>
            <th>REMITENTE</th>
            <th>ASUNTO</th>
            <th>MENSAJE</th>
            <th>FECHA ENVIO</th>
            <th colspan="2">ACCIONES</th>

        </tr>


        <?php
        include('../../config/conexionDB.php');
        $mail = $_GET["mail"];
        $sql = "SELECT * from mensajes where men_remitente='$mail';";
        $result = $conn->query($sql);




        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo ("<td>" . $row["men_destinatario"] . "</td>");
                echo ("<td>" . $row["men_asunto"] . "</td>");
                echo ("<td>" . $row["men_mensaje"] . "</td>");
                echo ("<td>" . $row["men_fechaEnvio"] . "</td>");
                echo ("<td> <a href = ../controladores/abrirmensaje.php?codigo=" . $row['mens_id'] . "&mail=$_GET[mail]>ABRIR MENSAJE</a>" . " </td>");
                echo ("</tr>");
            }
        } else {
            echo "<tr>";
            echo ("<td colspan='5'>Ud no tiene mensajes. </td>");
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