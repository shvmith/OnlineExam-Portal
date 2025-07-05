<!DOCTYPE html>
<html lang="en">

<head>
    <title>Event Form</title>
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
        <center>
            <h2>Event Form</h2>
        </center>
        <form action="eventprocess.php" method="post">
            <div class="form-group">
                <label for="eventName">Event Name:</label>
                <input type="text" id="eventName" name="name" required>
            </div>
            <div class="form-group">
                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" name="date" required>
            </div>
            <div class="form-group">
                <label for="eventTime">Event Time:</label>
                <input type="time" id="eventTime" name="time" required>
            </div>
            <div class="form-group">
                <label for="eventDescription">Event Description:</label>
                <textarea id="eventDescription" name="description" required></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>




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


</html>