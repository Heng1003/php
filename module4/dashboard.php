<?php
session_start();
// check session and cookie for ridirecting to login page
if (!isset($_SESSION["username"]) && !isset($_COOKIE["username"])) {
    header("Location: login.php");
    exit();
} else {
    if (isset($_COOKIE["username"])) {
        $_SESSION["username"] = $_COOKIE["username"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashborad</h1>
    <?php echo "Welcome " . $_SESSION["username"]; ?>
    <br>
    <a href="logout.php">Logout</a>
</body>

</html>