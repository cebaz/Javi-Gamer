<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "javi_gamer";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Registro</title>
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
        <h1>Registrarse</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input class="caja" type="text" id="usuario" name="usuario" placeholder="USUARIO:" required><span class="barra"></span>
            <br>
            <input class="caja" type="password" id="contrasena" name="contrasena" placeholder="CONTRASEÑA:" required><span class="barra"></span>
            <br>
            <input class="caja" type="password" id="contrasena2" name="contrasena2" placeholder=" REPETIR CONTRASEÑA:" required><span class="barra"></span>
            <br>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $texto1 = $_POST["contrasena"];
                    $texto2 = $_POST["contrasena2"];
                    if ($texto1 == $texto2) {
                        $usuario = $_POST["usuario"];
                        $contrasena = $_POST["contrasena"];

                        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<div id="CS">La cuenta ya existe</div>';
                        } else {
                            $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
                            if(mysqli_query($conn, $sql)){
                                header("Location: ../user/user-index.html");
                            }
                        }
                    } else {
                        echo '<div id="CS">Las contraseñas no coinciden</div>';
                    }
                }
            ?>
            <input type="submit" value="Registrarse" id="boton">
            <a href="login.php" id="reg">Iniciar Sesion</a>
        </form>
        
    </div>
    <main>
        
    </main>
    <div id="footer">
        <p style="margin: 0;">Todos los derechos reserados - 2023</p>
    </div>
</body>
</html> 