<?php 
// membuat array asosiatif untuk menyimpan data mahasiswa
 $mhs = [ 
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65], //mahasiswa1
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79], //mahasiswa2
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41], //mahasiswa3
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75], 
 ];
 
 // melakukan perulangan untuk setiap elemen array $mhs
 for ($i=0; $i < count($mhs); $i++) { 
    // variabel $nilai_akhir untuk menyimpan hasil dari penghitungan nilai akhir mhs
    $mhs[$i]["akhir"] = $mhs[$i]["uts"] * 0.4 + $mhs[$i]["uas"] * 0.6; 

    $nilai_akhir = $mhs[$i]["akhir"];
    // Pengkondisian switch case untuk menentukan nilai huruf berdasarkan nilai akhir
    switch (true) {
        case ($nilai_akhir >= 80):
            $mhs[$i]["huruf"] = "A"; 
            break;
        case ($nilai_akhir > 70):
            $mhs[$i]["huruf"] = "B";
            break;
        case ($nilai_akhir > 60):
            $mhs[$i]["huruf"] = "C"; 
            break;
        case ($nilai_akhir > 50):
            $mhs[$i]["huruf"] = "D"; 
            break;
        default:
            $mhs[$i]["huruf"] = "E"; 
    } 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402.php</title>

    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr style="background-color: #D3D3D3;"> 
            <td>Nama</td> 
            <td>NIM</td> 
            <td>Nilai UTS</td> 
            <td>Nilai UAS</td> 
            <td>Nilai Akhir</td> 
            <td>Huruf</td> 
        </tr>

        <?php
        //Menampilkan output
            for ($i=0; $i < count($mhs); $i++) { 
                echo "<tr>"; 
                echo "<td>".$mhs[$i]["nama"]."</td>"; 
                echo "<td>".$mhs[$i]["nim"]."</td>"; 
                echo "<td>".$mhs[$i]["uts"]."</td>"; 
                echo "<td>".$mhs[$i]["uas"]."</td>"; 
                echo "<td>".$mhs[$i]["akhir"]."</td>"; 
                echo "<td>".$mhs[$i]["huruf"]."</td>"; 
                echo "</tr>"; 
                }
        ?>
    </table>
</body>
</html>