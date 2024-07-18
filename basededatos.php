<?php
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto por tu contraseña
$dbname = "asesoria_escolar";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    $escuela = $_POST['escuela'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO estudiantes (nombre, edad, grado, escuela, email, mensaje) VALUES ('$nombre', $edad, '$grado', '$escuela', '$email', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
