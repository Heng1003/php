<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP XSS Prevention Example</title>
</head>
<body>
    <form action="">
        Name: <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
    <?php
    $name = $_GET['name'] ?? 'visitor';
    $safeName = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    ?>
  <p>Hello, <?= $safeName ?>!</p>
</body>
</html>