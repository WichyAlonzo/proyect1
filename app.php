<?php

include 'app/conn.php';
// Configuración de cabeceras para permitir solicitudes CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Obtener los datos JSON enviados
$data = json_decode(file_get_contents("php://input"), true);
function generateRandomString($length = 8) {
    // Definir los caracteres que se pueden usar
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';

    // Generar el string aleatorio
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

// Verificar si los datos fueron recibidos correctamente
if ($data) {
    // Extraer información del cliente
    $infoCliente = $data[0]['InfoCliente'];
    $status = 'nuevo'; // nuevo
    $idRandom = generateRandomString(); // Programar Random
    $repa = ''; // nuevo
    $total = $infoCliente['total']; // pasar total
    $delivery = $infoCliente['delivery']; // nuevo
    $nombre = $infoCliente['nombre'];
    $telefono = $infoCliente['telefono'];
    $direccion = $infoCliente['direccion'];
    $coordenadas = json_encode($infoCliente['coordenadas']);
    $notas = $infoCliente['notas'];
    $isPickUp = $infoCliente['isPickUp'];

    // Extraer información de los pedidos
    $pedidos = json_encode($data[1]['Pedidos']); // Convertir a JSON para almacenar

    // Preparar y vincular la consulta SQL
    $stmt = $conn->prepare("INSERT INTO pedidos (status, idrandom, repa, total, envio, nombre, telefono, direccion, coordenadas, notas, isPickUp, productos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssssssssssis", $status, $idRandom, $repa, $total, $delivery, $nombre, $telefono, $direccion, $coordenadas, $notas, $isPickUp, $pedidos);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Orden recibida correctamente.'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al insertar en la base de datos: ' . $stmt->error
            ]);
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al preparar la consulta: ' . $conn->error
        ]);
    }

    // Cerrar conexión
    $conn->close();
} else {
    // Si no se reciben datos, devolver un error
    echo json_encode([
        'status' => 'error',
        'message' => 'No se recibieron datos.'
    ]);
}
?>