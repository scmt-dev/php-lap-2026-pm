<?php 

require_once '../core/db.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $sql = "SELECT * FROM categories";
        $result = $db->query($sql);
        $data['categories'] = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}