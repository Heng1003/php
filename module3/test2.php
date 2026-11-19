<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action=""> Email: <input type="email" name="email"> <button type="submit">Submit</button>
    </form>
    <?php if (isset($_POST['email'])) {
        echo "Email: " . $_POST['email'];
    } ?>
</body>
</html>