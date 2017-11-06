<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'designprob';
   $conn = mysqli_connect('localhost', 'root','', 'designprob');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
?>