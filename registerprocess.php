<?php
session_start();
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$IDno = $_POST['IDno'];
$bday = $_POST['bday'];
$pnumber = $_POST['pnumber'];



$query = "INSERT INTO user (name, email, pass, IDno, pnumber) VALUES ('$name', '$email', '$password','$IDno', '$pnumber')";
$result = mysqli_query($conn, $query);


if ($result) {
    echo '<div style="text-align: center; margin-top: 20px;">
            <h2 style="color: #333;">Registration successful!</h2>
            <p style="color: #666;">Please go back and <a href="login.php">login</a> to your account.</p>
        </div>';
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
} else {
header("Location: register.php");
}

?>