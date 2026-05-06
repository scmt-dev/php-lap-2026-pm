<?php 
require_once '../core/db.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $id = $_GET['id'] ?? null;
        if($id) {
            $sql = "SELECT * FROM accounts WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                echo json_encode($data);
                exit;
            }
        }
        $sql = "SELECT * FROM accounts";
        $result = $db->query($sql);
        $data['accounts'] = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}