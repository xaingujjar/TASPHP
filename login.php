<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: url('https://source.unsplash.com/1600x900/?nature,water') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .login-card .form-control {
            border-radius: 5px;
        }

        .login-card .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
            margin-top: 1rem;
            font-weight: bold;
        }

        .login-card .btn-primary:hover {
            background-color: #0056b3;
        }

        .login-card .form-text {
            margin-top: 1rem;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>

<div class="login-container">
    <div class="login-card">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="form-text text-center mt-3">
                <a href="#">Forgot your password?</a> | <a href="#">Sign up</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
