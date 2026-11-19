<?php
session_start();
$valid_user = "admin";
$valid_pass = "123";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == $valid_user && $password == $valid_pass) {
        $_SESSION["username"] = $username;
        if (isset($_POST["remember"])) {
            setcookie("username", $username, time() + 86400);
        }
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login!";
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login form</h1>
    <form method="POST">
        Username: <input type="text" name="username"><br> 
        Password: <input type="password" name="password"><br> 
        <input type="checkbox" name="remember"> Remember Me<br> 
        <button type="submit">Login</button>
    </form>
</body>

</html>