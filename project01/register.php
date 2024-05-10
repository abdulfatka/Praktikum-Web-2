<?php
require 'koneksi.php';
if (isset($_POST["submit"])) {
    $_username = $_POST['username'];
    $_password = $_POST['password'];
    $_name = $_POST['name'];
    $data = [$_username, $_password, $_name];
    $sql = "INSERT INTO users (username, password, name) VALUES (? ,? ,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    ?>
    <script type="text/javascript">
            alert('Registrasi Berhasil! Gass Login Cuyy');
        </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register </title>
<link href="assets/img/images.png" rel="icon">
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
        background-color: #fff;
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
            <img src="images/F.png" alt="logo" width="50" class="shadow-light rounded-circle">
        </div>
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <div>
            <label for="username">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="username">Username Baru:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password Baru:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="submit">Masuk</button>
        </div>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login</a></p>

</div>

</body>
</html>
