<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302.php</title>
</head>
<body>
<!-- Membuat form input tinggi, alamat gambar, dan button Cetak -->
<form action="" method="POST">
    Tinggi :
    <input type="text" name="tinggi"><br>
    Alamat Gambar :
    <input type="text" name="link"><br>
    <button type="submit" name="cetak">Cetak</button>
</form><br>

    <?php
    // Memeriksa apakah button Cetak sudah ditekan, jika sudah maka input akan dieksekusi dan mencetak ppola bintang dimulai
    if (isset($_POST['cetak'])){
        //Mengambil nilai variabel tinggi dan gambar dari input user
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['link'];
        //Membuat variabel untuk digunakan pada perulangan loop
        $i = 1;
        $j = $tinggi;
        //Lopp untuk mencetak pola bintang ke layar, dengan menggunakan variabel $i dan $k
        while ($i <= $tinggi) {
            //Loop kedua untuk mengatur hasil cetak bintang menjadi horizontal
            for ($k = 1; $k <= $tinggi; $k++) {
                if ($k < $i) {
                    echo "<img style='width: 25px; opacity: 0;' src='$gambar' alt=''>";
                } else {
                    echo "<img style='width: 25px;' src='$gambar' alt=''>";
                }
            }
            echo "<br>";
            $i++;
        }
    }
?>
</body>
</html>