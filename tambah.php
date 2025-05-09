<?php

session_start();

if(!isset($_SESSION["login"])){//jika tidak ada session login maka arahkan ke form login
    header("Location: login.php");
    exit;
}

require 'function.php';
$conn = mysqli_connect("localhost", "root","","phpdasar");

if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST)>0){
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    
}
?>
<html>
    <head>
        <title>Tambah To Do List</title>
        <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-image: url('image2.jpg');
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
        .tambah-container {
            background-color: #111;
            border: 1px solid #00ff00;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 30px #00ff00;
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
        input[type="text"] {
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
        
        </style>
    </head>
    <body>
        <div class="tambah-container">
        <h1>Tambah To Do List</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="ToDolist">To Do List: </label>
                    
                </li>
                <li>
                <input type="text" name="ToDoList" required>
                <button type="submit" name="submit">Tambah</button>
                <button type="button" onclick="window.location.href='index.php'" style="margin-top: 10px" >> Kembali</button>
                </li>
            </ul>

        </form>
        </div>
    </body>
</html>