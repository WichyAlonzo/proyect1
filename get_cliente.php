
<?php
// Conectar a la base de datos
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


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Consulta para obtener los datos del cliente
    $sql = "SELECT * FROM pedidos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
        
        // Puedes agregar la lógica para obtener los productos relacionados si es necesario
        // Por ejemplo, si tienes una tabla de productos relacionados:
        $productosSql = "SELECT * FROM pedidos WHERE id = ?";
        $productosStmt = $conn->prepare($productosSql);
        $productosStmt->bind_param("i", $id);
        $productosStmt->execute();
        $productosResult = $productosStmt->get_result();


        // Devolver los datos del cliente y productos como JSON
        echo json_encode([
            'cliente' => $cliente
        ]);
    } else {
        echo json_encode(['error' => 'Cliente no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID no proporcionado']);
}
?>