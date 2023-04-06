<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303.php</title>
</head>
<body>
    <!-- Membuat form input batas bawah dan batas atas -->
    <form action="" method="POST"> 
        Batas Bawah : <input type="number" name="bawah"></br> 
        Batas Atas : <input type="number" name="atas"></br> 
        <input type="submit" value="Cetak" name="submit"></br> 
    </form></br> 

    <?php 
    // Memeriksa apakah button Cetak sudah ditekan, jika sudah maka akan diambil nilai bawah dan atas dari input dan mulai proses looping
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah']; 
        $atas = $_POST['atas']; 
        $i = $bawah;

        // Melakukan looping jika nilai $i masih lebih kecil atau sama dengan nilai $atas
        do {
             // Jika nilai ($i + 7) % 5 sama dengan 0, maka tampilkan gambar bintang, jika tidak tampilkan angka
            echo (($i+7)%5 == 0) ? "<img src='star-images-9441.png' width='15px' height='15px'>&nbsp;" : "$i&nbsp;";
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>