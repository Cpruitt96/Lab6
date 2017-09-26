<?php
    $dbhost = 'localhost';
    $dbuser = 'mgs_user';
    $dbpass = 'pa55word';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
?>