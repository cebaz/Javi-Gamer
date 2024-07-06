<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>INICIAR SESION</title>
    <link rel="icon" href="../img/icono.jpeg" type="img/x-icon">
</head>
<body>
    
<div id="header">
        <div class="botons">
            <a class="btn" href="../html/index.html">Inicio</a>
            <a class="btn" href="login.php">Iniciar Sesion</a>
        </div>
        <h1 id="title">JAVI GAMER</h1>
    </div>


    <div id="Contenedor">
        <h1>INICIAR SESION</h1>
        <form action="verificar.php" method="post">
            <input class="caja" type="text" name="usuario" placeholder="USUARIO:" required><span class="barra"></span>
            <br>
            <input class="caja" type="password" name="contrasena" placeholder="CONTRASEÑA:" required><span class="barra"></span>
            <br>
            <input type="submit" value="Iniciar sesión" id="boton">
            <a href="registro.php" id="reg">Registrarse</a>
        </form>
    </div>
    <main>
        
    </main>
    <div id="footer">
        <p style="margin: 0;">Todos los derechos reserados - 2023</p>
    </div>
</body>
</html> 