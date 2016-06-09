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
                <a class="navbar-brand" href="index.html">Home</a>
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
                    <a href="barang.html" class="list-group-item">Barang</a>
                    <a href="lampu.html" class="list-group-item">Katagori</a>
                    <a href="lampu.html" class="list-group-item">Laporan Penjualan</a>
                </div>
            </div>

           
            <center>
             <div class="col-md-9">
      <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Tambah Barang <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="actionbarang.php">
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="id" name="id" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Barang <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="nama_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Gambar Barang
                      </label>
                      <input id="gambar" type="file" name="gambar"  /> 
                    </div>
                    
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="deskripsi" class="form-control col-md-7 col-xs-12" type="text" name="deskripsi">
                      </div>
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
                
                <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Katagori <span class="required">*</span>
                      </label>
                    
                            <select name="id_kategori">   
                                     <?php

                                    $result = $pdo->query('SELECT * FROM kategori');
                                   

                                       while($row = $result->fetch()){ 
                                        ?>

                                                <tr>
                                                    <option value=$row[id_kategori] ><?php echo $row['kategori']?> </option>   
                                                </tr>
                                              <?php
                                    }
                                    ?>   
                                </select>     
                    
                    </div>

                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" onclick="location.href='barang.php'">Cancel</button>
                        <button type="submit" name="ditambah" class="btn btn-success">Submit</button>
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
