<?php
require_once "core/db.php";
require_once "core/auth.php";
$isSubmit = isset($_POST['submit']);
if($isSubmit) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $message = login($email, $password);
    if($message['error']) {
        echo $message['message'];
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