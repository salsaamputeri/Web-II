<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK102.php</title>
</head>
<body>
    <?php
        $jari= 4.2;
        $tinggi= 5.4;
        $panjang= 8.9;
        $lebar= 14.7;
        $sisi= 7.9;
        $alasP= 4;
        $tinggiP = 6.3;
        $tinggiL = 7.2;

        $volumeT = 3.14*$jari*$jari*$tinggi;
        $volumeK = 1/3*3.14*$jari*$jari*$tinggi;
        $volumeB = 4/3*3.14*$jari*$jari*$jari;
        $volumeP = (1/2*$alasP*$tinggi)*$tinggiP;
        $volumeL = 1/3*$panjang*$lebar*$tinggiL;

        $nim = 3;
        switch ($nim){
            case ( $nim == 0 || $nim == 1 ):
                echo number_format($volumeT,3) . " m3";
                break;
            case ( $nim == 2 || $nim == 3 ):
                echo number_format($volumeK,3) . " m3";
                break;
            case ( $nim == 4 || $nim == 5 ):
                echo number_format($volumeB,3) . " m3";
                break;
            case ( $nim == 6 || $nim == 7 ):
                echo number_format($volumeP,3) . " m3";
                break;
            case ( $nim == 8 || $nim == 9 ):
                echo number_format($volumeL,3) . " m3";
                break;
        default:
         echo "Tidak Ada";
        }
    ?>
</body>
</html>