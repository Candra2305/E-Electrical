<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "electrical";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>