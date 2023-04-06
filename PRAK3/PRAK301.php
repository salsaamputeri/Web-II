<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301.php</title>
</head>
<body>
    <!-- membuat form untuk memasukkan jumlah peserta -->
    <form action="" method="POST"> 
        Jumlah Peserta: <input type="number" name="jumlah"><br> 
        <input type="submit" name="submit" value="Cetak"> 
    </form>

    <?php
    // cek jika tombol 'Cetak' di klik, jika sudah maka jumlah peserta dari input pada form akan dieksekusi dan dilakukan inisiasi variabel untuk perulangan
    if (isset($_POST['submit'])){ 
        $jumlah = $_POST['jumlah']; 
        $i = 0; 
    
        // Perulangan untuk mencetak setiap peserta, sesuai dengan jumlah yang dimasukkan
        while ($i < $jumlah){ 
            $i++; 

            // Pengkondisian untuk menentukan warna font output. Jika nomor peserta genap, cetak dengan warna hijau, jika ganjil, cetak dengan warna merah
            if ($i%2 == 0){ 
                echo "<h2><font color='green'>Peserta Ke-$i</font></h2><br>"; 
            } else { 
                echo "<h2><font color='red'>Peserta Ke-$i</font></h2><br>"; 
            } 
        } 
    } 
    ?>
</body>
</html>