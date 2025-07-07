<?php 
session_start();
include("config.php");
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Display</title>
    <link rel="stylesheet" href="style.css">
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
                        <li class="alpharight"><a href="out.php">Log Out</a></li>
                        <li class="alpharight"><a href="index.php">Dashboard</a></li>
                    </ul>
                </center>
            </th>
        </tr>
    </table>
</div>



<div class="container">
        <center><h2>Question</h2></center>
        <div class="quiz-wrapper">
            <?php
            include("config.php");

            $sql = "SELECT id, qno, quiz FROM Quiz";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='quiz-box'>";
                    echo "<h3 class='quiz-quiz'><strong>Qiiz ID:</strong> " . $row["id"] . "</h3>";
                    echo "<p class='quiz-date'><strong>Qiiz No:</strong> " . $row["qno"] . "</p>";
                    echo "<p class='quiz-quiz'><strong>Question : </strong> " . $row["quiz"] . "</p>";
                    echo "<div class='button-container'>";
                    echo "<a href='updateEvent.php?id=" . $row["EID"] . "' class='update-btn'>Update</a>";
                    echo "<a href='deleteE.php?id=" . $row["EID"] . "' class='delete-btn'>Delete</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='quiz-box'>";
                echo "<p class='quiz-no'>No Questions found.</p>";
                echo "</div>";
            }

            $conn->close();
            ?>

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