<?php

session_start();

if(!isset($_SESSION["login"])){//jika tidak ada session login maka arahkan ke form login
    header("Location: login.php");
    exit;
}

require 'function.php';

//pagination

//konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM todolist"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;




$todolist = query("SELECT *FROM todolist LIMIT $awalData, $jumlahDataPerHalaman");// tampilkan 2 data mulai dri index 0



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
            background-image: url('image4.jpg');
            background-size: cover;
            background-position: center;  
            background-repeat: no-repeat;
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
            background-color: #111;
            border: 1px solid #00ff00;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px #00ff00;
            
        }

    </style>
</head>
    <body>
    <div class="container">
        <a href="logout.php" class="logout-link">Logout</a>
        <h1>To Do List</h1>

                <a href="tambah.php" class="button">+ Tambah To Do</a>
        <br><br>

        <!--navigasi-->
    <?php if($halamanAktif>1): ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif;?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif):?>
        <a href="?halaman= <?= $i;?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else: ?>
            <a href="?halaman=<?= $i; ?>"><?=$i;?></a>
        <?php endif;?>
    <?php endfor;?>

    <?php if($halamanAktif < $jumlahHalaman): ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif;?>


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
                <td>
                    <?php if ($row["selesai"] == 1): ?>
                    <span style="color: red;"><s><?= htmlspecialchars($row["ToDoList"]); ?></s></span>
                    <?php else: ?>
                    <?= htmlspecialchars($row["ToDoList"]); ?>
                    <?php endif; ?>
                </td>

                <td>
                    <?php if ($row["selesai"] == 1): ?>
                    <button class="button" disabled style="color: red; border-color: red;">Selesai</button>
                    <?php else: ?>
                    <a href="selesai.php?id=<?= $row["id"]; ?>" class="button">Selesai</a>
                    <?php endif; ?>

                        <a href="hapus.php?id=<?= $row["id"]; ?>" class="button" onclick="return confirm('Yakin dihapus ini deck?')">Hapus</a>
                </td>
            </tr>
            
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>