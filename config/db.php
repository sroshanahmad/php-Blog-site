<?php

   $server = 'ixnzh1cxch6rtdrx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
   $user= 'f91nshynhaimi44t';
   $password = 'k9hx63i3gycz29fa';
   $database = 'gf3lf8dw6ehwsc66';

   // Create Connection
   $conn = mysqli_connect($server,$user,$password,$database);

   // Check connection
   if( !$conn ) {
      echo 'Failed to connect due to '.mysqli_connect_error();
   }