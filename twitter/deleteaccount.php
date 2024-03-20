<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete Account</h1>
    
    <form action="delete.php" method="POST">
        <input type="hidden" name="form" value="suppr">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="submit" value="Delete">
    </form>
</body>
</html>