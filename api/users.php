<?php
require_once '../core/db.php';
header('Content-Type: application/json');
$data = [
    'version' => '1.0',
    'message' => 'Welcome to the Users API'
];

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $sql = "SELECT id, name, email FROM users";
        $result = $db->query($sql);
        $data['users'] = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
        break;
    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        $name = $input['name'] ?? '';
        $email = $input['email'] ?? '';
        if(!$email) {
            http_response_code(400);
            echo json_encode(['error' => 'Email is required']);
            exit;
        }
        echo json_encode($data);
        break;
    case 'PUT':
        $data['method'] = 'PUT';
        echo json_encode($data);
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        exit;
}


