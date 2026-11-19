<?php $name = $email = $password = "";
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation 
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }
    // Email validation 
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    // Password validation 
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    } elseif (strlen($_POST["password"]) < 6) {
        $errors["password"] = "Password must be at least 6 characters";
    } else {
        $password = $_POST["password"];
    }
    // If no errors 
    if (empty($errors)) {
        echo "Registration Successful!";
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
    <form method="POST">
        Name: <input type="text" name="name">
        <span style="color:red"><?php echo $errors["name"] ?? ""; ?></span><br>
        Email: <input type="text" name="email">
        <span style="color:red"><?php echo $errors["email"] ?? ""; ?></span><br>
        Password: <input type="password" name="password">
        <span style="color:red"><?php echo $errors["password"] ?? ""; ?></span><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>