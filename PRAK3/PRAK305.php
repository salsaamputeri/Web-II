<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305.php</title>
</head>
<body>
    <!-- Pembuatan form untuk mewadahi input dari pengguna dengan method post, serta button untuk memasukkan input dengan tipe submit -->
    <form action="" method="post">
        <input type="text" name="text" required>
        <button type="submit" name="submit">submit</button>
    </form>
    
    <?php
    //Memastikan apakah tombol submit sudah diklik sebelum selanjutnya mengeksekusi perintah pada baris berikutnya
    if (isset($_POST['submit'])) {
        //Menyimpan nilai dari input user pada field text
        $text=$_POST['text'];
        //Menghitung panjang karakter yang diinput user dengan fungsi strlen()
        $panjang = strlen($text);
        //Memecah karakter yang telah diinput untuk menjadi array
        $input = str_split($text);
        $j=0;
        //Menampilkan teks nilai input dan output dari pengguna pada layar
        echo "<h2>Input:</h2>$text<br><h2>Output:</h2>";
        //Loop while untuk perulangan yang terus berjalan selama nilai variabel $j kurang dari variabel $panjang
        while($j < $panjang){
            echo strtoupper($input[$j]);
            for($i=1; $i<$panjang; $i++){
                echo strtolower($input[$j]);
            }
            $j++;
        }
    }
    ?>

</body>
</html>