<?php 
require('model.php');<!--Memasukkan file model.php untuk digunakan-->
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);<!-- Pengkondisian jika ada parameter id_peminjaman maka fungsi hapuspeminjaman akan dapat digunakan dengan ID yang diberikan-->
}
?>
<!DOCTYPE html>
<html>

<head><!--Merupakan pengaturan style untuk tampilan web hingga baris ke-85 -->
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap">
    <style>
        body {
            width: 900px;
            margin: auto;
            background-color: #F4E9D8;
            font-family: 'Quicksand', sans-serif;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid #5E2612;
            font-style: normal;
        }

        th {
            background-color: #FFB200;
            color: #FFFFFF;
        }

        td {
            background-color: #FFEBCC;
        }

        h2 {
            color: #5E2612;
            font-size: 28px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        button {
            background-color: #FFB200;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5E2612;
        }

        .home-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            transition: transform 0.3s;
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.1);
        }

        img {
            border: none;
        }
    </style>
</head>

<body>
    <h2>Data Peminjaman</h2><!--Pembuatan tabel untuk menampilkan data peminjaman -->
    <table>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>ID Buku</th>
                <th>ID Member</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();//Fungsi tampilpeminjaman untuk mengambil data member dan menampilkannya pada tabel
            ?>
        </tbody>
    </table>
    <br>
    <a href="formpeminjaman.php"><button>Tambah Data Peminjaman</button></a><br><br><!--Pengaturan button Tambah Data Peminjaman agar bisa berpindah ke halaman formpeminjaman.php -->
    <a href="index.php" class="home-icon">
    <img src="gambar/home.jpg" alt="" height="50" width="50"></a><!-- Pengaturan untuk button home agar bisa kembali ke halaman index -->
</body>
</html>