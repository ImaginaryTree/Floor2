<?php

// mysqli_real_escape_string() -> to escape special character
// filter_input() -> checking eksternal variable
// FILTER_SANITIZE_STRING -> validation email input
// md5() -> hash input to md5


//start session
session_start();

//connect to mysql database
include('connection.php');

//checking if post login exist
if(isset($_POST['login'])){

    //get imput data from user
    $email = filter_input(INPUT_POST,'Email', FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($connect, $_POST['Password']);
    $password = md5($password);

    //running mysqli query
    $login = mysqli_query($connect,"SELECT * FROM account WHERE email='$email' and password='$password'");

    //get number of row
    $cek = mysqli_num_rows($login);
    if($cek > 0){

        //get data from database
        $data = mysqli_fetch_assoc($login);

        // checking the account role
        if($data['role']=="dosen"){

            //store data to session server
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "dosen";
            // redirect to dashboard
            header("location:../layouts/dashboard.php");


        }else if($data['role']=="student"){
            //store data to session server
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "student";
            // redirect to dashboard
            header("location:../layouts/dashboard.php");
    }else{
        //  redirect to login if account doesn't exist
        header("location:../login.php?pesan=gagal");
    }
}else{
    header("location:../login.php?pesan=gagal");
}
}


?>
