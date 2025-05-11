<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'function.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login - Hacker Style</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-image: url('image1.webp');
            background-size: cover;
            background-position: center;  
            background-repeat: no-repeat; 
            color: #00ff00;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #111;
            border: 1px solid #00ff00;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 20px #00ff00;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #00ff00;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #00ff00;
            background-color: #000;
            color: #00ff00;
        }
        input:focus {
            outline: none;
            border-color: #0f0;
            box-shadow: 0 0 5px #0f0;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #000;
            border: 1px solid #00ff00;
            color: #00ff00;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;

        }
        button:hover {
            background-color: #00ff00;
            color: #000;
        }
        .error {
            color: red;
            font-style: italic;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>

        <?php if (isset($error)): ?>
            <p class="error">Username / password salah</p>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">> Username</label>
            <input type="text" name="username" id="username" autocomplete="off">

            <label for="password">> Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="login">> Enter</button>

            

            <button type="button" onclick="window.location.href='registrasi.php'" style="margin-top: 10px" >> Sign Up</button>

        </form>
    </div>
</body>
</html>

