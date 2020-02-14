<?php
         $dbhost = 'remotemysql.com:3036';
         $dbuser = 'aQ4VHAUFSM';
         $dbpass = 'L8fuvCAclt';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_select_db( 'aQ4VHAUFSM' );

         mysqli_close($conn);
      ?>