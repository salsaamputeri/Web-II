<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Perpustakaan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap">
    <style> <!--Merupakan pengaturan style untuk tampilan web hingga baris ke-64 -->
        body {
            background-color: #F4E9D8;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
        color: #5E2612;
        font-size: 28px;
        }

        .table-container {
            display: inline-block;
            margin-right: 20px;
            text-align: center;
        }

        table {
            border-collapse: separate;
            border: 2px solid #FFB200;
            border-radius: 10px;
            background-color: #FFB200;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        table:hover,
        table:active {
            transform: scale(1.05);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: none;
        }

        th {
            background-color: #FFB200;
            color: #FFFFFF;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        td a {
            text-decoration: none;
        }

        td a img {
            border: 3px solid #FFEBCC;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1 style=" 'Quicksand', sans-serif;">
    PUSTAKA VIRTUAL</h1> <!--Judul pada tampilan web-->

    <div style="display: flex; justify-content: center;">
        <div class="table-container"> <!--Container dengan tiga tabel yang mewakili katagori buku, member, dan peminjaman -->
            <table>
                <tr>
                    <th>Buku</th>
                </tr>
                <tr>
                    <td><a href="Buku.php"><img src="gambar/buku.jpg" alt="" height="170" width="200"></a></td><!--Tautan ke halaman "Buku.php".-->
                </tr>
            </table>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>Member</th>
                </tr>
                <tr>
                    <td><a href="Member.php"><img src="gambar/member.jpg" alt="" height="170" width="170"></a></td><!--Tautan ke halaman "Member.php".-->
                </tr>
            </table>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>Peminjaman</th>
                </tr>
                <tr>
                    <td><a href="Peminjaman.php"><img src="gambar/pinjam.jpg" alt="" height="170" width="170"></a></td><!--Tautan ke halaman "Peminjaman.php".-->
                </tr>
            </table>
        </div>
    </div>
</body>
</html>