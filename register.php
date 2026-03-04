<?php
require_once "core/db.php";
$isSubmit = isset($_POST['submit']);

$message = '';
$error = false;
if($isSubmit) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

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

    if(!$error) {
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();
        $message = "User registered successfully!";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        Name:
        <input type="text" name="name" placeholder="name" required> <br>
        Email:
        <input type="text" name="email" placeholder="email" required> <br>
        Password:
        <input type="password" name="password" placeholder="Password">
        <br>
        Confirm Password:
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <br>
        <button type="submit" name="submit" value="Register">Register</button>
        <p>
            Already have an account? <a href="login.php">Login</a>
        </p>
    </form>
</body>
</html>