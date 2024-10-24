<?php
include('app/conn.php');
// Encabezados necesarios para Server-Sent Events (SSE)
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Función para enviar los datos de cada pedido como evento SSE
function enviarEvento($datos) {
    echo "data: " . json_encode($datos) . "\n\n";
    ob_flush();
    flush();
}

// Simulación de actualización de datos en tiempo real
while (true) {
    // Consulta SQL para obtener todos los campos de la tabla pedidos
    $result = $conn->query("SELECT * FROM pedidos");

    if ($result->num_rows > 0) {
        // Iterar sobre cada pedido y enviar todos los campos como evento SSE
        while ($row = $result->fetch_assoc()) {
            enviarEvento($row);
        }
    } else {
        echo "data: {\"message\": \"No hay pedidos disponibles\"}\n\n";
    }

    // Esperar 3 segundos antes de volver a consultar
    sleep(5);
}
?>
