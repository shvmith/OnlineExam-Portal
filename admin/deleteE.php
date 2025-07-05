<?php
    include("../config.php");

    if(isset($_GET['id']))   {
        $EID=$_GET['id'];

        $sql = "DELETE FROM events WHERE EID=$EID";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "delete successfull";
            echo "<script>alert('delete successfull')</script>";
            header('location:eventsmanage.php');
        }
        else{
            die(mysqli_error($conn));
        }
    } 
?>