<?php
    $connect = mysqli_connect("localhost","root","","elearning");
    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
