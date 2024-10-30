<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $title = trim($_POST['topic-title']);
    $content = trim($_POST['topic-content']);

    // Validar que no estén vacíos
    if (!empty($title) && !empty($content)) {
        // Crear una cadena con el título y contenido, separadas por un "|"
        $topic = $title . "|" . $content . "\n";

        // Guardar en un archivo de texto
        file_put_contents('topics.txt', $topic, FILE_APPEND);

        // Redirigir al usuario de vuelta al formulario
        header("Location: index.html");
        exit();
    } else {
        echo "Por favor, rellena todos los campos.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
