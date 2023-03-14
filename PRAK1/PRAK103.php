<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK103.php</title>
</head>
<body>
    <?php
        $C = 37.841;
        $F = ($C*9/5)+32;
        $R = $C*4/5;
        $K = $C+273;

        echo "Fahrenheit (F) = ". number_format ($F,4)."</br>";
        echo "Reamur (R) = ". number_format ($R,4)."</br>";
        echo "Kelvin (K) = ". number_format ($K,4)."</br>";
    ?>
</body>
</html>