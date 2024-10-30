<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$servidor = "localhost";
$usuario = "root";
$contrasena = "";  // Si tienes una contraseña en tu servidor MySQL, reemplázala aquí.
$base_datos = "registro";

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario y sanitizarlos
$email_or_username = $conexion->real_escape_string($_POST['username']);
$password = $conexion->real_escape_string($_POST['password']);

// Preparar la consulta usando sentencias preparadas para evitar inyecciones SQL
$stmt = $conexion->prepare("SELECT * FROM registros WHERE user = ? AND contra = ?");
$stmt->bind_param("ss", $email_or_username, $password);

// Ejecutar la consulta
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si las credenciales coinciden
if ($resultado->num_rows > 0) {
    // Redirigir a una página de éxito si la verificación es correcta
    header("Location: index.php");
    exit();  // Detener la ejecución del script
} else {
    // Redirigir a una página de error si las credenciales son incorrectas
    header("Location: loginerror.php");
    exit();
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>