<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202.php</title>
    <style> 
    /* Desain untuk pemberitahuan error dengan warna merah */
        .error{ 
        color: red; 
        } 
    </style>
</head>
<body>
    <?php
    // Deklarasi variable yang digunakan
    $pemberitahuannama = $pemberitahuannim = $result = 
    $pemberitahuanjenisk="";
    $nama = $nim= $jenisk = ""; 
    // Pengkondisian saat user menekan tombol submit
    if (isset($_POST['submit'])) { 
        // Pengkondisian untuk memeriksa input nama
        switch(true){
            case empty($_POST['nama']):
                $pemberitahuannama = "Nama tidak boleh kosong";
                break;
            default:
                $nama = cek_input($_POST['nama']);
                break;
        }
        // Pengkondisian untuk memeriksa input nim
        switch(true){
            case empty($_POST['nim']):
                $pemberitahuannim = "Nim tidak boleh kosong";
                break;
            default:
                $nim = cek_input($_POST['nim']);
                break;
        }
        // Pengkondisian untuk memeriksa input jenis kelamin
        switch(true){
            case empty($_POST['jenisk']):
                $pemberitahuanjenisk = "Jenis Kelamin tidak boleh kosong";
                break;
            default:
                $jenisk = cek_input($_POST['jenisk']);
                break;
        }
    }
    // Fungsi untuk menghapus karakter selain spasi dan huruf dalam mengisi input
    function cek_input($data) { 
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
    }
    ?>

    <form method="POST">
        <!-- Input data yang diperlukan dalam form. 
        Akan ada notifikasi error jika ada data yang kurang -->
        Nama : <input type="text" name="nama" value="<?= $nama 
        ?>"><span class="error">* <?=$pemberitahuannama;?></span></br>
        NIM : <input type="text" name="nim" value="<?= $nim 
        ?>"><span class="error">* <?=$pemberitahuannim;?></span></br>
        Jenis Kelamin: <span class="error">* 
        <?=$pemberitahuanjenisk;?></span></br>
        <input type="radio" name="jenisk" value="Laki-Laki"
            <?php if(isset($_POST["jenisk"]) && $_POST["jenisk"] == "Laki-Laki") echo "checked"; ?>
        > Laki-laki</br>
        <input type="radio" name="jenisk" value="Perempuan"
            <?php if(isset($_POST["jenisk"]) && $_POST["jenisk"] == "Perempuan") echo "checked"; ?>
        > Perempuan</br>
        <input type="submit" name="submit" value="Submit">
    </form></br>
        <?php
            // Pengkondisian untuk menampilkan semua data yang sudah diinputkan
            if(!empty($nama) && !empty($nim) && !empty($jenisk)){ 
            echo "$nama <br>"; 
            echo "$nim <br>"; 
            echo "$jenisk <br>"; 
            }
        ?>
</body>
</html>