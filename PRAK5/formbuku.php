<?php require('Model.php');<!--Memasukkan file model.php untuk digunakan-->
if (isset($_GET['id_buku'])) {
    editbuku();<!-- Pengkondisian jika ada parameter id_buku maka fungsi editbuku akan dapat digunakan dengan ID yang diberikan-->
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Edit Buku</title>"?> 

   <style> <!--Merupakan pengaturan style untuk tampilan web hingga baris ke-79 -->
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

        input[type="text"] {
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
            position: absolute; /* Mengubah posisi menjadi absolut */
            top: 20px; /* Mengatur jarak dari atas */
            left: 20px; /* Mengatur jarak dari kiri */
            transition: transform 0.3s;
            z-index: 999; /* Menambahkan z-index agar tetap terlihat di atas elemen lain */
        }

        .home-icon:hover,
        .home-icon:active {
            transform: scale(1.1);
        }
    </style>

</head>
<body>
    <h2>Form Pendataan Buku</h2>
    <form action="" method="post"> <!--Form untuk menyimpan input dari user berupa data ID Buku, Judul Buku, Nama Penulis, Penerbit, dan Tahun Terbit. Nilai-nilai input pada field-field ini diambil dari variabel $result-->
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) //Pengkondisian jika button Tambah diklik, maka fungsi tambahbuku() akan dipanggil dan mengirimkan nilai-nilai input dari form
                    //Jika button Edit diklik maka fungsi updatebuku() akan mengirimkan nilai-nilai input dari form juga.
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
        tambahbuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updatebuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>

<a href="index.php" class="home-icon"><img src="gambar/home.jpg" alt="" height="50" width="50"></a> <!--Pengaturan button Tambah Buku agar bisa berpindah ke halaman fomrbuku.php -->
</body>
</html>