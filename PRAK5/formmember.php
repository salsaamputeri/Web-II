<?php require('Model.php');<!--Memasukkan file model.php untuk digunakan-->
if (isset($_GET['id_member'])) {
    editmember();<!-- Pengkondisian jika ada parameter id_member maka fungsi editmember akan dapat digunakan dengan ID yang diberikan-->
}
?>
<!DOCTYPE html>
<html>
<head><!--Merupakan pengaturan style untuk tampilan web hingga baris ke-79 -->
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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
            width: 100px;
        }

        input[type="text"],
        input[type="datetime-local"],
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
    <h2>Form Pendataan Member</h2><!--Form untuk menyimpan input dari user berupa data ID Member,  Nama Member, Nomor, Alamat, Tanggal Pendaftaran, dan Tanggal Batas Pembayaran. Nilai-nilai input pada field-field ini diambil dari variabel $result-->
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td><input type="datetime-local" name="daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Batas Pembayaran</td>
                <td><input type="date" name="bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_member']))//Pengkondisian jika button Tambah diklik, maka fungsi tambahmember() akan dipanggil dan mengirimkan nilai-nilai input dari form
                    //Jika button Edit diklik maka fungsi updatemember() akan mengirimkan nilai-nilai input dari form juga. 
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
        tambahmember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updatemember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>

<a href="index.php" class="home-icon"><img src="gambar/home.jpg" alt="" height="50" width="50"></a>
</body>
</html>