<?php
// Establecer la cabecera para permitir solicitudes CORS (opcional)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Obtener el contenido de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si los datos son válidos
if ($data) {
    // Ruta donde se guardará el archivo JSON
    $filePath = '../business/cactus747.json';

    // Leer el contenido actual del archivo JSON
    if (file_exists($filePath)) {
        $currentData = json_decode(file_get_contents($filePath), true);
    } else {
        $currentData = []; // Si el archivo no existe, inicializa un array vacío
    }

    // Verificar si ya existe una entrada para el negocio específico
    $businessKey = $data['business']; // Obtener la clave del negocio

    if (!isset($currentData[$businessKey])) {
        $currentData[$businessKey] = []; // Inicializar si no existe
    }

    // Agregar el nuevo registro al array correspondiente
    $currentData[$businessKey][] = $data; // Agrega el nuevo registro al final del array

    // Guardar los datos actualizados en el archivo JSON
    if (file_put_contents($filePath, json_encode($currentData, JSON_PRETTY_PRINT))) {
        echo json_encode(['message' => 'Archivo guardado exitosamente.']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Error al guardar el archivo.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Datos no válidos.']);
}
?>