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
    </head>
    <body>
        <h1>Tambah To Do List</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="ToDolist">To Do List: </label>
                    
                </li>
                <li>
                <input type="text" name="ToDoList"><button type="submit" name="submit">Tambah</button>
                </li>
            </ul>

        </form>
    </body>
</html>