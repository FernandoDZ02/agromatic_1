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

// Obtener datos del formulario
$nombre = $_POST['fullname'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$repass = $_POST['confirm_password'];

// Verificar si el correo o el nombre de usuario ya existen
$verificar_sql = "SELECT * FROM registros WHERE correo='$email' OR user='$user'";
$resultado = $conexion->query($verificar_sql);

if ($resultado->num_rows > 0) {
    // Si ya existe, redirigir a "registrado.html"
    header("Location: error.html");
    exit();  // Detener la ejecución del script
} else {
    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO registros (nombre, correo, user, contra, repcontra) VALUES ('$nombre', '$email', '$user', '$pass', '$repass')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        // Redirigir al usuario a una página de éxito "registro_exitoso.html"
        header("Location: exito.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>

