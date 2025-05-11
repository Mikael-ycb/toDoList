<?php


require 'function.php';

if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo "<script>
                alert('user baru ditambahkan!');
        </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <style>
        label{
            display: block;
            display: block;
            margin-bottom: 5px;
        }
        * {
            font-fam
        body {
            background-image: url('image.png');
            background-size: cover;
            background-position: center;  
            background-repeat: no-repeat; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .registrasi-container {
            background-color: #111;
            border: 1px solid #00ff00;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 50px #00ff00;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #00ff00;
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
        </style>
    </head>
    <body>
        <div class="registrasi-container">
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name ="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li><label for="password2">Konfirmasi Password: </label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register!</button>
        </li>
        <li>
        <button type="button" onclick="window.location.href='login.php'" style="margin-top: 10px" >> Kembali ke login</button>
        </li>
        </ul>

    </form>
    </div>
    </body>
</html>