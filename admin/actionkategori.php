<?php
include('../admin/koneksi.php');
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
if(isset($_POST['ditambah'])){
try{
	$sql	= 'insert into kategori set id_kategori = ?, kategori= ?';

	$query = $pdo->prepare($sql);
	$query -> bindParam (1, $_POST['id_kategori']);
	$query -> bindParam (2, $_POST['kategori']);
	

	if($query->execute()){
			header('location: kategori.php');
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
if(isset($_POST['tedit'])){
try{
	$sql	= 'update barang set id = :id,nama_barang = :nama_barang,gambar = :gambar,harga = :harga,jumlah = :jumlah';

	$query = $pdo->prepare($sql);
	$query -> bindParam (':id', $_POST['id']);
	$query -> bindParam (':nama_barang', $_POST['nama_barang']);
	$query -> bindParam (':gambar', $_POST['gambar']);
	$query -> bindParam ('harga', $_POST['harga']);
	$query -> bindParam ('jumlah', $_POST['jumlah']);

	if($query->execute()){
			header('location: barang.php');
	}else{
		die('gagal mengedit');
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