<?php
session_start();

if(!isset($_SESSION["login"])){//jika tidak ada session login maka arahkan ke form login
    header("Location: login.php");
    exit;
}

require 'function.php';
$todolist = query("SELECT * FROM todolist");



?>
<html>
    <head>
        <title>To Do List</title>
    </head>
    <body>

    <a href="logout.php">Logout</a>

        <h1>To Do List</h1>

        <a href="tambah.php">To Do List</a>
        <br>

        <table border="1", callpadding="50" callspacing="0">
            <tr>
                <th>No.</th>
                <th>To Do List</th>
                <th>Update</th>
            </tr>

            <?php $i = 1;?>
            <?php foreach($todolist as $row):?>
            <tr>
                <td><?= $i;?></td>
                <td><?= $row["ToDoList"];?></td>
                <td>
                    <a href="">Selesai</a> |
                    <a href="hapus.php?id=<?=$row["id"];?>" onclick=" return confirm('Yakin di hapus ini deck?')">Hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </body>
</html>