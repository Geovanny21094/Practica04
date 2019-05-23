<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>MENSAJE NUEVO</title>
    <script type="text/javascript" src="../controladores/funcion.js"></script>
</head>

<body>
    <form id="formulario" method="POST" action="../controladores/enviarmensaje.php">
        <h1>Enviar nuevo Mensaje.</h1>
        <p>Destinatario (*):
            <input type="text" id="remite" name="remite" placeholder="Ingrese el e-mail destino.." required onblur="validarMail(this)"> 
            <span id="mensajeMail" class="error"></span>
        </p>
        <br/>
        <p>Asunto:
            <input type="text" id="asunto" name="asunto" placeholder="Ingrese un asunto">
            <span id="mensajeTelefono" class="error"></span>
        </p>
        <br/>
        <p> MENSAJE (*): <br/>
            <input type="text" id="mensaje" name="mensaje" >
        </p>
        <br/>
        <button type="submit" id="btnEnviar"> ENVIAR </button>
        <button type="button" id="btnCancelar"> CANCELAR </button>
        <br>
    </form>
</body>

</html>