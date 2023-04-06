<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304.php</title>
</head>
<body>
        <?php 
        // Set nilai awal variabel $star dan $pict
        $star = NULL; 
        $pict = "star-images-9441.png"; 

        // Cek apakah variabel $_POST['star'] sudah di-set atau belum
        if (isset($_POST['star'])) { 
            $star = $_POST['star']; 
        } 

        // Cek apakah tombol "Tambah" ditekan
        if (isset($_POST['tambah'])) { 
            $star++; 
        } 

        // Cek apakah tombol "Kurang" ditekan
        if (isset($_POST['kurang'])) { 
            $star--; 
        } 
    ?>

    <?php 
        // Cek apakah nilai variabel $star masih kosong atau belum
        if ($star == null) { 
    ?>
            <!-- Jika $star masih kosong, tampilkan form untuk mengisi jumlah bintang -->
            <form action="" method="POST"> 
                Jumlah bintang <input type ="number" name="star" required><br> 
                <button type = "submit">Submit</button><br> 
            </form> 
    <?php 
        } else { 
     echo "Jumlah bintang $star";  ?> <br><br>
            <!-- Jika $star sudah terisi, tampilkan jumlah bintang sesuai nilai variabel $star -->
            <?php for($i = 0; $i < $star; $i++) { ?>
                <img src="<?= $pict ?>" width="76px" height="76px">
            <?php } ?>

            <!-- Tampilkan tombol "Tambah" dan "Kurang" beserta nilai $star -->
            <form action="" method="POST"> 
                <button name="tambah">Tambah</button> 
                <input type='hidden' name='star' value='<?= $star; ?>'/> 
                <button name="kurang">Kurang</button> 
            </form> 
    <?php 
        } 
    ?>

</body>
</html>