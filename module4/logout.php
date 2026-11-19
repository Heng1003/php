<?php
// remove session data and destroy the session
session_start();
session_destroy();
// remove the cookie if it exists
if (isset($_COOKIE["username"])) {
    setcookie("username", "", time() - 3600);
}
header("Location: login.php");
exit();
?>