<?php
$mantenimiento;
$mantenimientoX = false;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_base_de_datos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
