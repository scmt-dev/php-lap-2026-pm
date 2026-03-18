<?php
# core 
require_once "core/auth.php";
require_once "core/db.php";

# helper
require_once "helper.php";

$isSubmit = isset($_POST['submit']);

if($isSubmit) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = login($email, $password);
    if($message['error']) {
        echo $message['message'];
        $ip = $_SERVER['REMOTE_ADDR'];
        writeLog("$ip|$email".$message['message']);
        errorHanding($ip .'|'.$message['message']);
    } else {
        header("Location: index.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        Email:
        <input type="text" name="email" placeholder="email"> <br>
        Password:
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit" name="submit" value="Login">Login</button>
    </form>
</body>
</html>