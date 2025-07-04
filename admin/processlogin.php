<?php
session_start();
require "../config.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $username && $row['password'] === $password){
            echo "Logged In";
            $_SESSION['aid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['apass'] = $row['password'];
            
            header("Location: index.php");
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
