<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Login</h1>
        </div>
        <form action="login_process.php" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-button">
                <button type="submit">Login</button>
            </div>
            <div class="form-input rgister-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>