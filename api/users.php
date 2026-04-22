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
        $password = $input['password'] ?? '';
        $confirm_password = $input['confirm_password'] ?? '';
        $error = false;
        $message = '';
        if(!$name) {
            $message = "Name is required";
            $error = true;
        }

        if(!$email) {
            $message = "Email is required";
            $error = true;
        }

        if(!$password) {
            $message = "Password is required";
            $error = true;
        }

        if(strlen($password) < 6) {
            $message = "Password must be at least 6 characters";
            $error = true;
        }

        if($password !== $confirm_password) {
            $message = "Password does not match";
            $error = true;
        }

        if($error) {
            http_response_code(400);
            echo json_encode(['error' => $message]);
            exit;
        }

        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();
        $data['message'] = "User registered successfully!";
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