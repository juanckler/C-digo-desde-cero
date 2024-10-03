<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Verificar que las contraseñas coincidan
    if ($contrasena != $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Hash de la contraseña
    $contrasena_hashed = password_hash($contrasena, PASSWORD_DEFAULT);

    // Conexión a la base de datos (asegúrate de actualizar los datos de conexión)
    $conn = new mysqli("localhost", "root", "", "misistemacrud");

    // Verificar si la conexión es exitosa
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar e insertar el nuevo usuario
    $sql = $conn->prepare("INSERT INTO usuarios (correo_electronico, nombre, usuario, contrasena) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $correo, $nombre, $usuario, $contrasena_hashed);

    if ($sql->execute()) {
        header("Location: login.html");
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar conexión
    $sql->close();
    $conn->close();
}
?>
