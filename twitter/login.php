<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>


<main>

<h1>Login</h1>

    <form action="controllers/loginController.php" method="POST">
        <input type="hidden" name="form" value="login">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>

    <h3>If you don't have a account </h3>
    <a href="register.php">Register</a>

    </main>
    
</body>
</html>