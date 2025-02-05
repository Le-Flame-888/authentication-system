<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .header {
            background: #0056b3;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }

        .header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            background: #fff;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #0056b3;
        }

        .container .content form .form-group button{
            padding: 10px;
            background: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
    

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