<?php
   session_start();
   require_once("../login/koneksi.php");
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $query = $db->prepare("SELECT * FROM user WHERE email = ?");
   $query->execute(array($email));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['pass']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['email'] = $hasil['email'];
       if(@$hasil['Admin@gmail.com']){
       		header('location:../admin/index.html');	
       }else{
       	header('location:../index.php');
       }
       
     }
   }
?>