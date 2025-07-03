<?php
session_start();
require "config.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    
    $sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email && $row['pass'] === $pass){
            echo "Logged In";
            
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['phone'] = $row['pnumber'];
            
            header("Location: user.php");
            exit();
        }
    else{
        header("Location: login.php?error=Incorrect User name or password");
        exit();
    }
    }else{
        header("Location: login.php?error=Incorrect User name or password");
        exit();
    }
    }
    else{
        header("Location: notlogged.php");
        exit();
    }
?>
