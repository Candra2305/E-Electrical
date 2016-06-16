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

                    
                
            <h2>E-ELECTRICAL</h2>
            
            <center>
            <table border="2">
                <tr  width="1200" bgcolor="#D8D8D8">
                    <td align="center" rowspan="1" width="80" > 
                        <b><font size="4">Id </b></font></td>
                    <td align="center" rowspan="1" width="300" > 
                        <b><font size="4">Email </b></font></td>
                    <td align="center" rowspan="1" width="300"> 
                        <b><font size="4">Nama Barang</b></font></td>
                    <td align="center" rowspan="1" width="300"> 
                        <b><font size="4">Jumlah Beli</b></font></td>
    
            <?php

            $result = $pdo->query('SELECT * FROM transaksi');
           

               while($row = $result->fetch()){ 
                ?>

                        <tr>
                            <td p align="center" bgcolor="#FFFFFF"><?php echo $row['id']; ?></td>
                            <td p align="center" bgcolor="#FFFFFF"><?php echo $row['email']; ?></td>
                            <td p align="center" bgcolor="#FFFFFF"><?php echo $row['nama_barang']; ?></td>
                            <td p align="center" bgcolor="#FFFFFF"><?php echo $row['jumlah_beli']; ?></td>

                        </tr>
                      <?php
            }
            ?>
                </table>
                </center>
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
