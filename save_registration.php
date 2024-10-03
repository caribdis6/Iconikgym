<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iconik_gym"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insertar datos en la base de datos
$sql = "INSERT INTO registros (nombre, email, telefono) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. Nos pondremos en contacto contigo.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
