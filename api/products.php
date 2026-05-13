<?php 

require_once '../core/db.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $offset = $_GET['offset'] ?? 0;
        $sql = "SELECT * FROM products limit ?, 20";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $offset);
        $stmt->execute();
        $result = $stmt->get_result();
        $data['products'] = $result->fetch_all(MYSQLI_ASSOC);
        // number check
        echo json_encode($data, JSON_NUMERIC_CHECK);
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}