<?php
session_start();

if(!isset($_SESSION["login"])){//jika tidak ada session login maka arahkan ke form login
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET["id"];
mysqli_query($conn, "UPDATE todolist SET selesai = 1 WHERE id = $id");
header("Location: index.php");
exit;


?>