<?php 
require('model.php');<!--Memasukkan file model.php untuk digunakan-->
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);<!-- Pengkondisian jika ada parameter id_member maka fungsi hapusmember akan dapat digunakan dengan ID yang diberikan-->
}
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Merupakan pengaturan style untuk tampilan web hingga baris ke-79 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap">
    <style>
        body {
            width: 900px;
            margin: auto;
            background-color: #F4E9D8;
            font-family: 'Quicksand', sans-serif;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #5E2612;
            font-size: 28px;
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th {
            background-color: #FFB200;
            color: #FFFFFF;
            padding: 10px;
        }

        td {
            background-color: #FFEBCC;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: #5E2612;
        }

        button {
            background-color: #FFB200;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #FFC53D;
        }

        .home-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <h2>Daftar Member</h2><!--Pembuatan tabel untuk menampilkan data member -->
    <table border="1">
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();//Fungsi tampilmember untuk mengambil data member dan menampilkannya pada tabel
            ?>
        </tbody>
    </table>
    <br>
    <a href="formmember.php"><button>Tambah Member</button></a> <br><!--Pengaturan button Tambah Member agar bisa berpindah ke halaman formmember.php -->
    <a href="index.php" class="home-icon">
    <img src="gambar/home.jpg" alt="" height="50" width="50"></a><!-- Pengaturan untuk button home agar bisa kembali ke halaman index -->
</body>
</html>