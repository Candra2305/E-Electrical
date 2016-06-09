<?php
include('../admin/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="../gambar/LISTRIK.jpg"/>
    <title>E-Electrical</title>
    <link rel="stylesheet" href=css/grop.css type="text/css" />
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--Daftar dan Login-->


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="head">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../admin/index.html">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">E-Electrical</p>
                <div class="list-group">
                    <a href="../admin/barang.php" class="list-group-item">Barang</a>
                    <a href="../admin/kategori.php" class="list-group-item">Katagori</a>
                    <a href="../admin/laporan.php" class="list-group-item">Laporan Penjualan</a>
                </div>
            </div>

           
            <center>
             <div class="col-md-9">
      <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Edit Barang <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

 <?php

   try{
      $sql = "select *from barang where id = ?";
      $data = $pdo->prepare($sql);

      $data->bindParam (1, $_REQUEST['id']);

      $data->execute();

      $row = $data->fetch(PDO::FETCH_ASSOC);

      $id = $row['id'];
      $nama_barang = $row ['nama_barang'];
      $gambar = $row ['gambar'];
      $harga = $row ['harga'];
      $jumlah = $row ['jumlah'];
  } 
  catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}
 
 /* if(isset($_GET['kod'])){
    $kod    = $_GET['kod'];
    $query  = mysqli_query($db_link,'select * from list_barang where kode_barang = "'.$kod.'"');
    $data   = mysqli_fetch_array($query);
    $nama_barang  = $data['nama_barang'];
    $harga  = $data['harga'];
    $stok = $data['stok'];
  }
  else{
  $nama_barang = '';
  $harga = '';
  $stok = '';
  }*/
?>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="actionbarang.php">
 
    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="id" name="id"  required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id; ?>
                      " readonly="readonly">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Barang <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="nama_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $nama_barang ?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Gambar Barang
                      </label>
                      <input id="gambar" type="file" name="gambar"  /> 
                    </div>

                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="harga" class="form-control col-md-7 col-xs-12" type="text" name="harga">
                      </div>
                    </div>

                   <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="jumlah" class="form-control col-md-7 col-xs-12" type="text" name="jumlah">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                
                <!--<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Katagori <span class="required">*</span>
                      </label>
                        <form>
                            <select name="buah">    
                                <option value="">Silahkan Pilih</option>    
                                <option value="Apel">Apel</option>    
                                <option value="Jeruk">Jeruk</option>    
                                <option value="Semangka">Semangka</option>    
                                <option value="Salak">Salak</option>    
                                </select>     
                        </form>
                    </div>-->

                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" onclick="location.href='barang.php'">Cancel</button>
                        <button type="submit" name="tedit" class="btn btn-success">Edit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
            </center>
                

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
