<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $password = $_POST['password'] ?? '';
  $confirmPassword = $_POST['confirm_password'] ?? '';

  if ($password === '' || $confirmPassword === '') {
    $message = 'Please enter both passwords.';
  } elseif ($password !== $confirmPassword) {
    $message = 'Passwords do not match.';
  } else {
    // Use this hash when saving the account; do not store plain-text passwords.
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $message = 'Passwords match.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirm Password Example</title>
</head>
<body>
  <form method="post">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
        <br>
    <label for="confirm_password">Confirm password</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
    <button type="submit">Submit</button>
  </form>

  <?php if ($message !== ''): ?>
    <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
  <?php endif; ?>
</body>
</html>