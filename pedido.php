<?php
include('app/conn.php');
// Encabezados necesarios para Server-Sent Events (SSE)
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener clienteId del parámetro GET
$clienteId = isset($_GET['clienteId']) ? $_GET['clienteId'] : '';

if (empty($clienteId)) {
    echo "data: {\"message\": \"Cliente ID no proporcionado\"}\n\n";
    exit;
}

// Función para enviar los datos de cada pedido como evento SSE
function enviarEvento($datos) {
    echo "data: " . json_encode($datos) . "\n\n";
    ob_flush();
    flush();
}

// Simulación de actualización de datos en tiempo real
while (true) {
    // Consulta SQL para obtener todos los campos del pedido específico por clienteId
    $stmt = $conn->prepare("SELECT * FROM pedidos WHERE id = ?");
    $stmt->bind_param("s", $clienteId);  // s significa que el parámetro es una cadena
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Iterar sobre el pedido y enviar todos los campos como evento SSE
        while ($row = $result->fetch_assoc()) {
            enviarEvento($row);
        }
    } else {
        echo "data: {\"message\": \"No hay pedidos disponibles para este cliente\"}\n\n";
    }

    // Esperar 3 segundos antes de volver a consultar
    sleep(5);
}
?>
