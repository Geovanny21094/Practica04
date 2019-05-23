<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="../css/login_user.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../controladores/funcion.js"></script>


</head>

<body>

    <?php
    $_SESSION['isLogged'] = FALSE;
    ?>


    <form id="loginForm" method="POST" onsubmit="return validarCamposObligatoriosLogin()" action="../controladores/loginUser.php">
        <h1>INGRESAR USUARIO</h1>
        <p>Correo (*): <input type="email" id="email" name="email" placeholder="Ingrese su email." onblur="validarMail(this)"></p>
        <span id="mensajeEmail" class="error"></span>
        <br />
        <p>Contraseña (*): <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña."></p>
        <span id="mensajePassword" class="error"></span>
        <br />

        <button type="submit" id="btnLogin"> INGRESAR </button><br>
    </form>

    <div id="cuenta">
    <br>
    <br> <a class="creacion" href="crear_user.html">CREAR NUEVA CUENTA</a>
    </div>
<div id="link">
    <footer>
            <p>Angel Geovanny Duchitanga Abad</p>
            <p>e-mail:<a href="mailto:aduchitanga@est.ups.edu.ec">aduchitanga@est.ups.edu.ec </a></p>
            <p>© Todos los derechos reservados</p>
    </footer>
</div>
</body>

</html>