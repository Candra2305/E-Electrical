<?php
try {
   // buat koneksi dengan database
            $pdo = new PDO('mysql:host=localhost;dbname=electrical', 'root', '');

}
catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}

?>