<?php 
session_start();
include("../config.php");
if (isset($_SESSION['aid']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
 
</head>
<body>

<style>
    .button-container {

  align-items: center;
  margin: 0 auto;
}

.left-button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.right-button {
  background-color: #008CBA;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>

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
                    <li class="alpha"><a href="addevents.php">Add Events</a></li>
                    <li class="alpha"><a href="addquiz.php">Add Quiz</a></li>
                    <li class="alpha"><a href="addnews.php">Add Announcements</a></li>
                        <li class="alpharight"><a href="out.php">Log Out</a></li>
                        <li class="alpharight"><a href="index.php">Dashboard</a></li>
                    </ul>
                </center>
            </th>
        </tr>
    </table>
</div>







<div class="container">
    <center><h2>Welcome, <?php echo $_SESSION['username']; ?></h2> </center>
</div>

<br>
<div class="container">
    <center><h2>Admin Portal</h2></center>
    <div class="button-container">
    <a href="manageuser.php" class="left-button">Manage User</a>
  <a href="managenews.php" class="left-button">Manage News</a>
  <a href="managemsg.php" class="right-button">Manage Message</a><br>
  <a href="eventsmanage.php" class="left-button">Manage Event</a>
  <a href="quizmanage.php" class="right-button">Manage Quiz</a>
</div>

</div>


<br>


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