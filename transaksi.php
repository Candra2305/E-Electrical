<?php
	include"koneksi.php";

	  $id    =  $_GET['id'];

	  $sql = "select * from barang where id = '$id' ";
      $data = $pdo->prepare($sql);
      $data->execute();
      $row = $data->fetch(PDO::FETCH_ASSOC);
      
      $jumlah_lama = $row['jumlah'];
      $jumlah_ambil = $_POST ['jumlah'];
      $jum_baru = $jumlah_lama - $jumlah_ambil;

      echo "jumlah lama = $jumlah_lama, jumlah ambil= $jumlah_ambil, jmlah baru = $jum_baru";
      session_start();


if(isset($_POST['beli'])){
try{
	$sql	= 'insert into transaksi set id = ?,email = ?,nama_barang = ?, jumlah_beli = ?';

	$email = $_SESSION['email'];
	$query = $pdo->prepare($sql);
	$query -> bindParam (1, $_POST['id']);
	$query -> bindParam (2, $email);
	$query -> bindParam (3, $_POST['nama_barang']);
	$query -> bindParam (4, $_POST['jumlah']);
	

	if($query->execute()){
			header('location: index.php');
	}else{
		die('gagal menambah');
	}
	} 
	catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
}

?>