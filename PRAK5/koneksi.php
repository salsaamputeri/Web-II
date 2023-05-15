<?php 
function koneksi()//Deklarasi fungsi  koneksi()untuk membuat koneksi ke database MySQL menggunakan PDO (PHP Data Objects).
{
    try{
        $pdo_conn = new PDO('mysql:host=localhost;dbname=perpustakaanwebII','root','',
        array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT=>TRUE)
    );//Blok try-catch yang digunakan untuk menangani exception (kesalahan) yang terjadi saat membuat koneksi atau menjalankan query ke database. Blok try berisi kode yang mungkin menyebabkan exception, dan blok catch akan menangkap exception yang terjadi dan menampilkan pesan error.
    }catch(PDOException $e){
        print "Koneksi atau query bermasalah: ".$e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;//Setelah objek PDO berhasil dibuat, fungsi return akan mengembalikan objek PDO tersebut, sehingga dapat digunakan untuk melakukan query dan interaksi dengan database pada bagian-bagian lain dari kode.
}

?>