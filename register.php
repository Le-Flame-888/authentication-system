<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Register</h1>
        </div>
        <form action="register_process.php" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-input">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-button">
                <button type="submit">Register</button>
            </div>
            <div class="form-input login-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>