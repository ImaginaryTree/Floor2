<?php

if(isset($_POST['register'])){
    include('connection.php');

    $email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
    $password = mysqli_real_escape_string($connect, $_POST['Password']);
    $password = md5($password);
    $validpass = mysqli_real_escape_string($connect, $_POST['Validpass']);
    $validpass = md5($validpass);

    if($password == $validpass){
        $result = mysqli_query($connect,"select * from account where email='$email'");

        if(mysqli_fetch_assoc($result)){
            echo '<script>alert("Account already registered")</script>';
            echo '<script>window.location="../login.php"</script>';
        }
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
