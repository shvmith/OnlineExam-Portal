<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>

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
        <center><h2>Update Event</h2></center>
        <?php
include("../config.php");

if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $query = "SELECT * FROM user WHERE id = $ID";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $bday = $row['bday'];
        $IDno = $row['IDno'];
        $pnumber = $row['pnumber'];
        $pass = $row['pass'];
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid User ID.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bday = $_POST['bday'];
    $IDno = $_POST['IDno'];
    $pnumber = $_POST['pnumber'];
    $pass = $_POST['pass'];

    $sql = "UPDATE user SET name='$name', email='$email', bday='$bday', IDno='$IDno', pnumber='$pnumber', pass='$pass' WHERE id=$ID";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: manageuser.php");
        exit;
    } else {
        echo "Error updating information: " . $conn->error;
    }
}
?>


<form action="updateuser.php?id=<?php echo $ID; ?>" method="post">
    <div class="form-group">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email : </label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="form-group">
        <label for="bday">Birth Day:</label>
        <input type="date" id="bday" name="bday" value="<?php echo $bday; ?>" required>
    </div>
    <div class="form-group">
        <label for="IDno">ID Number:</label>
        <input type="text" id="IDno" name="IDno" value="<?php echo $IDno; ?>" required>
    </div>
    <div class="form-group">
        <label for="pnumber">Phone Number : </label>
        <input type="number" id="pnumber" name="pnumber" value="<?php echo $pnumber; ?>" required>
    </div>
    <div class="form-group">
        <label for="quizNo">Password :</label>
        <input type="text" id="pass" name="pass" value="<?php echo $pass; ?>" required>
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
