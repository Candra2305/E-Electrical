<?php
include('koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="gambar/LISTRIK.jpg"/>
    <title>E-Electrical</title>
    <link rel="stylesheet" href=css/grop.css type="text/css" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

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
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="./login/daftar.php">Daftar</a>
                    </li>
                    <li>
                        <a href="./login/login.php">Login</a>
                    </li>
                   <li>
                        <a href="./login/logout.php">Logout</a>
                    </li>
                    <?php
                        session_start();
                        if(@$_SESSION['email']){
                            echo $_SESSION['email'];
                        }

                    ?>
                </ul>
                  <form class="navbar-form navbar-right">
                      <input class="search" type="text" placeholder="Cari..." required> 
                     <input class="button" type="button" value="Cari">  
                 </form>
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
                    <a href="lampu.php" class="list-group-item">Lampu</a>
                    <a href="komponen.php" class="list-group-item">Komponen </a>
                    <a href="television.php" class="list-group-item">Television</a>
                    <a href="kabel.php" class="list-group-item">Kabel</a>
                    <a href="dll.php" class="list-group-item">Dll</a>
                </div>
            </div>

           
            <center>
             <div class="col-md-9">
      <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Beli Barang <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

 <?php

   try{
     
   	  $kod    =  $_GET['id'];
      $sql = "select * from barang where id = '$kod' ";
      $data = $pdo->prepare($sql);

      //$data->bindParam (1, $_REQUEST['id']);

      $data->execute();

      $row = $data->fetch(PDO::FETCH_ASSOC);

      $id = $row['id'];
      $nama_barang = $row ['nama_barang'];
      $gambar = $row ['gambar'];
      $deskripsi = $row['deskripsi'];
      $harga = $row ['harga'];
      $jumlah = $row ['jumlah'];
      $id_kategori = $row['id_kategori'];
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

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="transaksi.php?id=<?php echo $id?>">
 
    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="id" name="id"  required class="form-control col-md-7 col-xs-12" value="<?php echo $id; ?>" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Barang <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="nama_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12 " value=<?php echo $nama_barang ?> readonly="readonly">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="harga" class="form-control col-md-7 col-xs-12" type="text" name="harga" value=<?php echo $harga ?> readonly="readonly">
                      </div>
                    </div>

                   <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Stok</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="jumlah" class="form-control col-md-7 col-xs-12" type="text" name="stok" value=<?php echo $jumlah ?> readonly="readonly">
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="jumlah" class="form-control col-md-7 col-xs-12" type="text" name="jumlah">
                      </div>
                    </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" onclick="location.href='barang.php'">Cancel</button>
                        <button type="submit" name="beli" class="btn btn-success">Beli</button>
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
