<?php
    //connecting to mysql database
    $connect = mysqli_connect("localhost","root","","elearning");
    //checking if connection to database false or true
    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
