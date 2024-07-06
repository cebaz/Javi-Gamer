<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javi_gamer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($usuario == 'administrador') {
        header("Location: ../admin/admin-index.html");
    } else {
        header("Location: ../user/user-index.html");
    }
} else {
    echo "Usuario o contraseña incorrectos";
}
?>