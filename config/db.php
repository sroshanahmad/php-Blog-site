<?php

   $server = 'localhost';
   $user= 'root';
   $password = '';
   $database = 'phpblog';

   // Create Connection
   $conn = mysqli_connect($server,$user,$password,$database);

   // Check connection
   if( !$conn ) {
      echo 'Failed to connect due to '.mysqli_connect_error();
   }