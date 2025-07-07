<?php
    include("../config.php");

    if(isset($_GET['id']))   {
        $ID=$_GET['id'];

        $sql = "DELETE FROM announcements WHERE id=$ID";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "delete successfull";
            echo "<script>alert('delete successfull')</script>";
            header('location:managenews.php');
        }
        else{
            die(mysqli_error($conn));
        }
    } 
?>