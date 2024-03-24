<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>

<main>
    <h1>Register</h1>

    <form action="controllers/registerController.php" method="POST">
        <input type="hidden" name="form" value="register">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="text" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>

    <h3>If you have a account </h3>
    <a href="login.php">Login</a>
    
</main>
    
</body>
</html>