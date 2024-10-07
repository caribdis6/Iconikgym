<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Cambia por tu nombre de usuario de MySQL
$password = ""; // Cambia por tu contraseña de MySQL
$dbname = "gym_users"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. ¡Gracias por inscribirte!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
