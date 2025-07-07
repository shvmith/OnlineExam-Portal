<?php 
session_start();
include("../config.php");
if (isset($_SESSION['aid']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Manage News</title>
    
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
        <center><h2>Announcements Manage</h2></center>
        <div class="event-wrapper">
            <?php
            include("../config.php");

            $sql = "SELECT id,title, description FROM announcements";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='event-box'>";
                    echo "<h3 class='event-name'> <strong>Title : </strong> " . $row["title"] . "</h3>";
                    echo "<p class='event-description'><strong>Description : </strong> " . $row["description"] . "</p>";

                    echo "<div class='button-container'>";

                    echo "<a href='updatenews.php?id=" . $row["id"] . "' class='update-btn'>Update</a>";
                    echo "<a href='deleten.php?id=" . $row["id"] . "' class='delete-btn'>Delete</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='event-box'>";
                echo "<p class='no-events'>No announcements found.</p>";
                echo "</div>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>



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