<?php
    include("../config.php");

    if(isset($_GET['id']))   {
        $CID=$_GET['id'];

        $sql = "DELETE FROM contact_messages WHERE CID=$CID";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "delete successfull";
            echo "<script>alert('delete successfull')</script>";
            header('location:managemsg.php');
        }
        else{
            die(mysqli_error($conn));
        }
    } 
?>