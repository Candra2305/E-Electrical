<?php
/*include('../admin/koneksi.php'); 
$kod	= $_GET['kod'];

$sql 	= 'delete from barang where id="'.$kod.'"';
$query = $pdo->prepare($sql);
header('location: barang.php');*/
include('../admin/koneksi.php'); 
try{
	$kod	= $_GET['kod'];
	$sql 	= 'delete from kategori where id_kategori="'.$kod.'"';

	$query = $pdo->prepare($sql);

	if($query->execute()){
			header('location: kategori.php');
	}else{
		die('gagal menghapus');
	}
	} 
	catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
?>

