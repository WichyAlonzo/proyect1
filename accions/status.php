<?php
    include('../app/conn.php');
if (isset($_POST['id']) && isset($_POST['status'])) {
    $idRandom = $_POST['id'];
    $status = $_POST['status'];

    // Obtener la fecha actual en el formato deseado
    $fechaActual = date('Y-m-d H:i:s');

    // Preparar la consulta SQL para actualizar el registro
    $sql = "UPDATE pedidos SET status = ?, fecha = ? WHERE idrandom = ?";
    $stmt = $conn->prepare($sql);
    
    // Verificar si la preparación fue exitosa
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("ssi", $status, $fechaActual, $idRandom);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo 'si'; // Respuesta que indica que se actualizó correctamente
        } else {
            echo 'no'; // Respuesta que indica que no se pudo actualizar
        }
        
        // Cerrar la declaración
        $stmt->close();
    } else {
        echo 'no'; // Respuesta que indica que no se pudo preparar la consulta
    }
} else {
    echo 'no'; // Respuesta que indica que no se recibieron los parámetros
}

// Cerrar la conexión a la base de datos
$conn->close();
?>