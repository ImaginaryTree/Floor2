<?php

//checking post named regsiter
if(isset($_POST['register'])){
    //connecting to connection.php
    include('connection.php');
    //storing data from post
    $email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
    $password = mysqli_real_escape_string($connect, $_POST['Password']);
    $password = md5($password);
    $validpass = mysqli_real_escape_string($connect, $_POST['Validpass']);
    $validpass = md5($validpass);
    //validating password
    if($password == $validpass){
        //checking if email already exist
        $result = mysqli_query($connect,"select * from account where email='$email'");
        
        //redirect to login if email already exist
        if(mysqli_fetch_assoc($result)){
            echo '<script>alert("Account already registered")</script>';
            echo '<script>window.location="../login.php"</script>';
        }
        //insert data if email doesn't exist & redirect to login page
        else{
            mysqli_query($connect,"INSERT INTO account (email,password) VALUES('$email','$password')");
            echo '<script>alert("register success")</script>';
            echo '<script>window.location="../login.php"</script>';
        }
    }else{
        header("location:../register.php?pesan=password does not match");
    }
}

?>
