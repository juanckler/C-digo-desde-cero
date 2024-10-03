<?php
session_start();

// Verificar si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    echo "Acceso denegado. Solo los administradores pueden acceder a esta página.";
    exit;
}

// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "misistemacrud");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Eliminar usuario si se solicitó
if (isset($_GET['eliminar'])) {
    $id_eliminar = $_GET['eliminar'];
    $sql = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $sql->bind_param("i", $id_eliminar);
    $sql->execute();
    header("Location: crud_usuarios.php");
}

// Actualizar usuario si se envió el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar'])) {
    $id_editar = $_POST['id'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];

    $sql = $conn->prepare("UPDATE usuarios SET correo_electronico = ?, nombre = ?, usuario = ? WHERE id = ?");
    $sql->bind_param("sssi", $correo, $nombre, $usuario, $id_editar);
    $sql->execute();
    header("Location: crud_usuarios.php");
}

// Obtener la lista de usuarios
$resultado = $conn->query("SELECT id, correo_electronico, nombre, usuario, es_admin FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
</head>
<body>

<h1>Gestión de Usuarios</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Correo Electrónico</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Es Administrador</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while($usuario = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['correo_electronico']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['es_admin'] ? 'Sí' : 'No'; ?></td>
            <td>
                <a href="crud_usuarios.php?editar=<?php echo $usuario['id']; ?>">Editar</a>
                <a href="crud_usuarios.php?eliminar=<?php echo $usuario['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<!-- Formulario de edición si se selecciona un usuario para editar -->
<?php if (isset($_GET['editar'])):
    $id_editar = $_GET['editar'];
    $sql = $conn->prepare("SELECT id, correo_electronico, nombre, usuario FROM usuarios WHERE id = ?");
    $sql->bind_param("i", $id_editar);
    $sql->execute();
    $resultado = $sql->get_result();
    $usuario = $resultado->fetch_assoc();
?>
<h2>Editar Usuario</h2>
<form action="crud_usuarios.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" value="<?php echo $usuario['correo_electronico']; ?>" required><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" value="<?php echo $usuario['usuario']; ?>" required><br>

    <input type="submit" name="editar" value="Guardar cambios">
</form>
<?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>
