<?php
include('../config/koneksi.php');
/*if(isset($_POST['ditambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id	= $_POST['id'];
	$nama_barang = $_POST['nama_barang'];
	$gambar	= $_POST['gambar'];
	$harga	= $_POST['harga'];
	$jumlah	= $_POST['jumlah'];
	
	$sql	= 'insert into barang (id,nama_barang,gambar_barang,harga,sjumlah) values ("'.$id.'","'.$nama_barang.'","'.$gambar.'","'.$harga.'","'.$jumlah.'")';
	$query = $koneksi->prepare($sql)
	//$query	= mysqli_query($db_link,$sql);
	
	if($query->execute()){
		header('location: barang.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}bindp
	else{
		echo 'Gagal';
	}
}*/
if(isset($_POST['creat'])){
try{
	$sql	= 'insert into user set Fnama = ?, Lnama= ?,email = ?,pass = ?';

	$query = $pdo->prepare($sql);
	$query -> bindParam (1, $_POST['Fnama']);
	$query -> bindParam (2, $_POST['Lnama']);
	$query -> bindParam (3, $_POST['email']);
	$query -> bindParam (4, $_POST['pass']);
	

	if($query->execute()){
			header('location: ../index.php');
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
/*if(isset($_POST['ditambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id	= $_POST['id'];
	$nama_barang = $_POST['nama_barang'];
	$gambar	= $_POST['gambar'];
	$harga	= $_POST['harga'];
	$jumlah	= $_POST['jumlah'];
	
	$sql	= 'update list_barang set id="'.$id.'", nama_barang="'.$nama_barang.'", gambar="'.$gambar.'", harga="'.$harga.'", jumlah="'.$jumlah.'" where id="'.$id.'"';
	$query = $pdo->query($sql);
	//$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: barang.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}*/

/*if(isset($_POST['tedit'])){
	$nama_barang	= $_POST['nama_barang'];
	$gambar_barang	= $_POST['gambar_barang'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];
	$kode_barang	= $_POST['kode_barang'];
	
	$sql	= 'update list_barang set nama_barang="'.$nama_barang.'", gambar_barang="'.$gambar_barang.'", harga="'.$harga.'", stok="'.$stok.'" where kode_barang="'.$kode_barang.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: databarang.php');
	}
	else{
		echo 'Gagal';
	}
}*/
?>