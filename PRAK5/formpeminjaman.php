<?php 
require('Model.php');<!--Memasukkan file model.php untuk digunakan-->
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();<!-- Pengkondisian jika ada parameter id_peminjaman maka fungsi editpeminjaman akan dapat digunakan dengan ID yang diberikan-->
}
?>
<!DOCTYPE html>
<html>
<head><!--Merupakan pengaturan style untuk tampilan web hingga baris ke-79 -->
    <title><?php echo (isset($_GET['id_peminjaman'])) ? "Edit Data Peminjaman" : "Tambah Data Peminjaman"; ?></title>
    <style>
        body {
            width: 900px;
            margin: auto;
            background-color: #F4E9D8;
            font-family: 'Quicksand', sans-serif;
            padding: 20px;
            position: relative; /* Menambahkan posisi relatif */
        }

        h2 {
            color: #5E2612;
            font-size: 28px;
            margin-top: 0;
            text-align: left;
            margin-top: 10px;
            margin-left: 130px;
        }

        table {
            margin-top: 20px;
            margin-right: auto; /* Mengatur margin kanan menjadi otomatis */
            margin-right: 100px; /* Menambahkan margin kanan untuk menggeser ke kiri */
        }

        tr {
            margin-bottom: 10px;
        }

        td:first-child {
            font-weight: bold;
            width: 150px;
        }

        input[type="text"],
        input[type="date"] {
            width: 300px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #5E2612;
            font-family: 'Quicksand', sans-serif;
        }

        button {
            background-color: #FFB200;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #5E2612;
        }

        .home-icon {
            position: absolute;
            top: 10px; /* Mengatur jarak dari atas */
            left: 10px; /* Mengatur jarak dari kiri */
            transition: transform 0.3s;
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <h2>Form Peminjaman</h2><!--Form untuk menyimpan input dari user berupa data ID Peminjaman,ID Buku,  ID Member, Tanggal Peminjaman, dan Tanggal Kembalian. Nilai-nilai input pada field-field ini diambil dari variabel $result-->
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman']))
                    //Pengkondisian jika button Tambah diklik, maka fungsi tambahpeminjaman() akan dipanggil dan mengirimkan nilai-nilai input dari form
                    //Jika button Edit diklik maka fungsi updatepeminjaman() akan mengirimkan nilai-nilai input dari form juga.
                    {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['id_buku'], $_POST['id_member'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['id_buku'], $_POST['id_member'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
<a href="index.php" class="home-icon"><img src="gambar/home.jpg" alt="" height="50" width="50"></a>
</body>
</html>