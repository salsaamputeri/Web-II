<?php
//inisiasi variabel baru
    $panjang = "";
    $lebar = "";
    $nilai = "";

    //Pengecekan jika form sudah diisi
    if (isset($_POST["submit"])) {
        //Mengembalikan nilai dari form yang sudah diisi
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401.php</title>

    <style>
        /* Styling table output */
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        table {
            margin-top: 12px;
        }
    </style>
</head>
<body>
<form method="POST">
        Panjang: <input type="text" name="panjang" value="<?= $panjang; ?>"><br>
        Lebar: <input type="text" name="lebar" value="<?= $lebar; ?>"><br>
        Nilai: <input type="text" name="nilai" value="<?= $nilai; ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

   <?php
    if (isset($_POST["submit"])) {
        //Pemecahan nilai matriks menjadi bentuk array
        $isi = explode(" ", $nilai);
        $panjangNilai = count($isi);
        if ($panjang * $lebar == $panjangNilai) {
            $count = 0;
            for ($i = 0; $i < $panjang; $i++) {
                for ($j = 0; $j < $lebar; $j++) {
                    $tampil[$i][$j] = $isi[$count];
                    $count++;
                }
            }

            //Menampilkan output nilai matriks dalam tabel
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $tampil[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<br>";
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>