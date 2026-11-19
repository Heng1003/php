<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Name: <input type="text" name="name">
        Email: <input type="email" name="email">
        Password: <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
    <?php if (empty($_POST['name'])) {
        echo "Name is required";
    } else {
        echo "Hello " . $_POST['name'];
    }
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        echo "Email: " . $email;
    } 
    $password = $_POST['password'];
    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters";
    } else {
        echo "Password: " . $password;
    } ?>
</body>
</html>