<?php
$isSubmit = isset($_POST['submit']);
if($isSubmit) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
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