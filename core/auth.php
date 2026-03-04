<?php
require_once "db.php";
// refactor code from register.php and login.php to here
function login($email, $password) {
    global $db;
    $sql = "SELECT id,name,password FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $isValid = password_verify($password, $user['password']);
        if($isValid) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $message = ['message' => "successful", 'error' => false];
            return $message;
        } else {
            return ['message' => "Invalid password", 'error' => true];
        }
    } 
    return ['message' => "User not found", 'error' => true];
}

function register($name, $email, $password) {

}

function logout($isRedirect = true) {
    session_destroy();
    if($isRedirect) {
        header("Location: login.php");
    }
}