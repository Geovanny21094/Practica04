<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pagina Usuario</title>
    <link href="../../css/index_user.css" rel="stylesheet" type="text/css"/>
</head>

<body>




    <?php

    session_start();
    if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE) {
        header("Location: ../../login/login.php");
    }

    echo "<header>";
    echo "<a href= nuevo_mensaje.html?mail=$_GET[mail]> NUEVO MENSAJE </a><br>";
    echo "<a href= index.php?mail=$_GET[mail]> MENSAJES RECIBIDOS </a><br>";
    echo "<a href= enviados.php?mail=$_GET[mail]>MENSAJES ENVIADOS</a><br>";
  

   
    echo "</header>";

    ?>





    <table style="width: 100%" border="1" id="mensajes">
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
        $sql = "SELECT * from mensajes where men_destinatario='$mail';";
        $result = $conn->query($sql);





        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                //echo ("<td>" . $row["mens_id"] . "</td>");
                echo ("<td>" . $row["men_remitente"] . "</td>");
                //echo ("<td>" . $row["mens_destin"] . "</td>");
                echo ("<td>" . $row["men_asunto"] . "</td>");
                echo ("<td>" . $row["men_mensaje"] . "</td>");
                echo ("<td>" . $row["men_fechaEnvio"] . "</td>");
                echo ("<td> <a href = ../controladores/abrirmensaje.php?codigo=" . $row['men_id'] . ">LEER</a>" . " </td>");
                echo ("</tr>");
            }
        } else {
            echo "<tr>";
            echo ("<td colspan='5'>No existe ningún mensaje en su bandeja. </td>");
            echo ("</tr>");

            
        }



        $conn->close();
        ?>

</table><br><br>


 <a  href=../../login/login.php> CERRAR SESION</a><br><br><br><br>


<div id="contacto">
<footer>

            <p>Angel Geovanny Duchitanga Abad</p>
			<p>e-mail:<a href="mailto:aduchitanga@est.ups.edu.ec">aduchitanga@est.ups.edu.ec </a></p>
			<p>© Todos los derechos reservados</p>
    </footer>
	</div>






</body>

</html>