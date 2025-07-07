<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Messages</title>
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






<?php
    include("../config.php");
 
    if (isset($_GET['id'])) {
        $CID = $_GET['id'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            $sql = "UPDATE contact_messages SET name='$name', email='$email', message='$message' WHERE CID=$CID";
            if ($conn->query($sql) === TRUE) {
                header("Location: managemsg.php");
                exit;
            } else {
                echo "Error updating information: " . $conn->error;
            }
        }

        $query = "SELECT * FROM contact_messages WHERE CID = $CID";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];
        } else {
            echo "Message not found.";
        }
    } else {
        echo "Invalid message ID.";
    }
    $conn->close();
?>

<div class="container">
    <h1>Manage Messages</h1>

    <form action=" " method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required><?php echo $message; ?></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
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

</body>
</html>
