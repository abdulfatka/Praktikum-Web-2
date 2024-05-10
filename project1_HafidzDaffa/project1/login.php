<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login </title>
<link href="assets/img/logo.png" rel="icon">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url("assets/img/hero-bg.jpg") ;

    }
    
    .login-container {
        width: 300px;
        background-color: red;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.1);
    }
    
    h2 {
        text-align: center;
        color: #333;
    }
    
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
    
</style>
</head>
<body>
<div class="login-logo">

<div class="login-container">
<div class="login-brand">
            <img src="assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
    <h2>Login</h2>
    <form action="proses.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="submit">Masuk</button>
        </div>
    </form>
</div>
</body>
</html>
