<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "misistemacrud");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Buscar al usuario en la base de datos
    $sql = $conn->prepare("SELECT id, contrasena, es_admin FROM usuarios WHERE usuario = ?");
    $sql->bind_param("s", $usuario);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($id, $hashed_password, $es_admin);
    $sql->fetch();

    if ($sql->num_rows > 0 && password_verify($contrasena, $hashed_password)) {
        // Verificar si es administrador
        if ($es_admin) {
            $_SESSION['admin'] = true;
            header("Location: crud_usuarios.php");
        } else {
            $_SESSION['admin'] = false;
            header("Location: index1.html");
        }
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $sql->close();
    $conn->close();
}
?>
