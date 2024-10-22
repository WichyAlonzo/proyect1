<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario (ejemplo)
$nombre = 'xxxxxxxxx';

// Insertar nuevo usuario
$sql = "INSERT INTO usuariosx (nombre) VALUES ('$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>