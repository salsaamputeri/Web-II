<?php
// deklarasi variabel array $mhs berisi data mahasiswa
$mhs = [
    [
        "no" => 1,
        "nama" => "Ridho",
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2,
        "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3,
        "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

// perulangan untuk setiap mahasiswa dalam array $mhs
for ($i = 0; $i < count($mhs); $i++) {
    // deklarasi variabel jumlah SKS mhs
    $jmlSks = 0;
    // perulanan untuk setiap mata kuliah dalam array "matkul"
    for ($j = 0; $j < count($mhs[$i]["matkul"]); $j++) {
        //menghitung jumlah SKS tiap mata kuliah
        $jmlSks += $mhs[$i]["matkul"][$j]["sks"];
    }
    $mhs[$i]["jmlSks"] = $jmlSks;
    //pengkondisian untuk mengecek apakah total SKS <7
    if ($mhs[$i]["jmlSks"] < 7) {
        $mhs[$i]["keterangan"] = "Revisi KRS";
    } else {
        $mhs[$i]["keterangan"] = "Tidak Revisi KRS";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403.php</title>

    <style>
        table,tr,td,th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }

        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <tr bgcolor = "CCCDCC">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

       <?php
       //perulangan sebanyak data mahasiswa dalam array $mhs
            for ($i = 0; $i < count($mhs); $i++) {
            //perulangan sebanyak jumlah mata kuliah yang diambil
            for ($j = 0; $j < count($mhs[$i]["matkul"]); $j++) {
                echo "<tr>";
                //switch case untuk menampilkan data pada tabel
                switch ($j) {
                case 0:
                    echo "<td>".$mhs[$i]["no"]."</td>";
                    echo "<td>".$mhs[$i]["nama"]."</td>";
                    echo "<td>".$mhs[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$mhs[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td>".$mhs[$i]["jmlSks"]."</td>";
                    if ($mhs[$i]["keterangan"] == "Revisi KRS") {
                    echo "<td style='background-color:red'>".$mhs[$i]["keterangan"]."</td>";
                    } else {
                    echo "<td style='background-color:green'>".$mhs[$i]["keterangan"]."</td>";
                    }
                    break;
                default:
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$mhs[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$mhs[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    break;
                }
                echo "</tr>";
            }
            }
        ?>
    </table>
</body>
</html>