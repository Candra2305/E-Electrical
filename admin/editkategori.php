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
                <a class="navbar-brand" href="../admin/index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../login/logout.php">Logout</a>
                    </li>
                       <?php
                        session_start();
                        if(@$_SESSION['email']){
                            echo $_SESSION['email'];
                        }

                    ?>
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
                  <h2>Form Edit Kategori Barang <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

 <?php

   try{
   	  $kod    = $_GET['kod'];
      $sql = 'select * kategori where id = "'.$kod.'"';
      $data = $pdo->prepare($sql);

      //$data->bindParam (1, $_REQUEST['id']);

      $data->execute();

      $row = $data->fetch(PDO::FETCH_ASSOC);

      $id_kategori = $row['id_kategori'];
      $kategori = $row['kategori'];
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
  echo "kategori = $kategori";
?>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="actionkategori.php">
 
    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="id_kategori" name="id_kategori"  required="required" class="form-control col-md-7 col-xs-12" value=<?php echo $id_kategori; ?>
                       readonly="readonly">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Barang <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="kategori" name="kategori" required="required" class="form-control col-md-7 col-xs-12 " value=<?php echo $kategori ?>>
                      </div>
                    </div>
                    

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
