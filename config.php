<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_exam";

$conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("connectin failed:". $conn->connect_error);
    }
?>