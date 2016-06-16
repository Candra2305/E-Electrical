<?php
  session_start();
  include("koneksi.php");


	   if($_SESSION['email'] == ""){
       		header('location:./login/login.php');	
       }else{
       	$id    = $_GET['id'];
       	header("location:beli.php?id=$id");
       }


?>  


