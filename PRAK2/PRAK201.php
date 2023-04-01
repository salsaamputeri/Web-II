<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201.php</title>
</head>
<body>
<form action="" method="POST">
    Nama: 1 <input type="text" name="nama1"></br>
    Nama: 2 <input type="text" name="nama2"></br>
    Nama: 3 <input type="text" name="nama3"></br>
    <input type="submit" name="submit" value="Urutkan"> 
</form></br>
<?php
    //Pengkondisian untuk mengecek apabila tombol submit sudah ditekan
    if(isset($_POST['submit'])){
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

    //Pengkondisian untuk mengurutkan nama dengan urutan abjad
        switch(true){
            case ($nama1<$nama2 && $nama1<$nama3):
                if ($nama2<$nama3){
                    echo "$nama1<br>$nama2<br>$nama3";
                }else {
                    echo "$nama1<br>$nama3<br>$nama2";
                }
                break;
            case ($nama2<$nama1 && $nama2<$nama3):
                if($nama1<$nama3){
                    echo "$nama2 <br>$nama1<br>$nama3";
                }else {
                    echo "$nama2<br>$nama3<br>$nama1";
                }
                break;
            default:
                if($nama1<$nama2){
                    echo "$nama3<br>$nama1<br>$nama2";
                }else {
                    echo "$nama3<br>$nama2<br>$nama1";
                }
                break;
        }
    }
    ?>
</body>
</html>