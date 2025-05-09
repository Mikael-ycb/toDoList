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
    <title>To Do List - Hacker Style</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background-color: #000;
            color: #00ff00;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #00ff00;
            margin-bottom: 20px;
        }

        a {
            color: #00ff00;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            background-color: #000;
            border: 1px solid #00ff00;
            padding: 5px 10px;
            margin-right: 5px;
            color: #00ff00;
            cursor: pointer;
        }

        .button:hover {
            background-color: #00ff00;
            color: #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #00ff00;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #111;
        }

        td {
            background-color: #000;
        }

        .logout-link {
            float: right;
            margin-bottom: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

    </style>
</head>
    <body>
    <div class="container">
        <a href="logout.php" class="logout-link">Logout</a>
        <h1>To Do List</h1>

        <a href="tambah.php" class="button">+ Tambah To Do</a>

        <table>
            <tr>
                <th>No.</th>
                <th>To Do List</th>
                <th>Update</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($todolist as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["ToDoList"]; ?></td>
                <td>
                    <a href="" class="button">Selesai</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" class="button" onclick="return confirm('Yakin dihapus ini deck?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>