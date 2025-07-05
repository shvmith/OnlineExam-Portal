<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Event</title>

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
        <center><h2>Event Form</h2></center>
        <?php
            include("../config.php");

            if (isset($_GET['id'])) {
                $EID = $_GET['id'];

                $query = "SELECT * FROM events WHERE EID = $EID";
                $result = $conn->query($query);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $description = $row['description'];
                } else {
                    echo "Event not found.";
                    exit;
                }
            } else {
                echo "Invalid event ID.";
                exit; 
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
                $name = $_POST['name'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $description = $_POST['description'];

              
                $sql = "UPDATE events SET name='$name', date='$date', time='$time', description='$description' WHERE EID=$EID";
                
                if ($conn->query($sql) === TRUE) {
                 
                    header("Location: eventsmanage.php");
                    exit;
                } else {
                    echo "Error updating information: " . $conn->error;
                }
            }
        ?>
        <form action="updateEvent.php?id=<?php echo $EID; ?>" method="post">
            <div class="form-group">
                <label for="eventName">Event Name:</label>
                <input type="text" id="eventName" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" name="date" value="<?php echo $date; ?>" required>
            </div>
            <div class="form-group">
                <label for="eventTime">Event Time:</label>
                <input type="time" id="eventTime" name="time" value="<?php echo $time; ?>" required>
            </div>
            <div class="form-group">
                <label for="eventDescription">Event Description:</label>
                <textarea id="eventDescription" name="description" required><?php echo $description; ?></textarea>
            </div>
            <input type="submit" value="Update">
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
