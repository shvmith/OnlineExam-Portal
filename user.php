<?php 
session_start();
include("config.php");
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">


    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<div class="header">
    <table width="100%" border="0">
        <tr>
           
            <th>
                <center><img class="logo" src="logo.png" width="160" height="60"></center>
            </th>
        </tr>
        <tr>
            <th>
                <center>
                    <ul class="menu">
                        <li class="alpha"><a href="index.php">Home</a></li>
                        <li class="alpha"><a href="events.php">Events</a></li>
                        <li class="alpha"><a href="quiz.php">Quizes</a></li>
                        <li class="alpha"><a href="news.php">Announcements</a></li>
                        <li class="alpharight"><a href="out.php">Log Out</a></li>
                        <li class="alpharight"><a href="user.php">Dashboard</a></li>
                    </ul>
                </center>
            </th>
        </tr>
    </table>
</div>










<div class="container">
    <center><h2>Welcome, <?php echo $_SESSION['name']; ?></h2> </center>
    
    <center><p>Email : <?php echo $_SESSION['email']; ?></p> </center>
    <center><p>Phone : <?php echo $_SESSION['phone']; ?></p> </center>
</div>

<br>













</div>
    </div>
<div class="footer">
    <div class="footer-section">
        <h3>About</h3>
        <ul>
            <li>Donate</li>
            <li>Blog</li>
            <li>Carriers</li>
            <li>Our Team</li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Follow us</h3>
        <ul>
            <li>Instagram</li>
            <li>YouTube</li>
            <li>Facebook</li>
            <li>LinkedIn</li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Subscribe Our Newsletter</h3>
        <form id="footerEmail" class="footerEmail" onsubmit="return validateForm()" action="" method="post">
            <input type="email" name="footerEmail" placeholder="Enter your email address">
            <input type="submit" value="Sign-up">
        </form>
       
    </div>
</div>


<?php
}   else {
    header("Location: login.php");
    exit;
}
?>