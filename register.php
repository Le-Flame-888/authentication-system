<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f1f1f1;
        }

        .container{
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .container h1{
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .container form{
            width: 100%;
        }

        .container form .form-input{
            position: relative;
            margin-bottom: 25px;
        }


        .container form .form-input input{
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
            padding: 0 10px;
            border-radius: 5px;
            outline: none;
        }

        .container form .form-input input:focus{
            border-color: #007bff;
        }

        .container form .form-input input:focus{
            top: -10px;
            color: #007bff;
        }

        .container form .form-input input:valid{
            top: -10px;
            color: #007bff;
        }

        .container form .form-input input:valid{
            border-color: #007bff;
        }   


        .container form .form-button button{
            margin-bottom: 20px;
            width: 100%;
            height: 40px;
            border: none;
            background: #007bff;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            border-radius: 5px;
        }

        .container form .form-button button:hover{
            background: #0056b3;
        }

    </style>
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