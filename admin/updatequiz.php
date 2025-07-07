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
        <center><h2>Update Event</h2></center>
        <?php
include("../config.php");

if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $query = "SELECT * FROM quiz WHERE id = $ID";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $qno = $row['qno'];
        $quiz = $row['quiz'];
    } else {
        echo "Quiz not found.";
        exit;
    }
} else {
    echo "Invalid Quiz ID.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quizNo = $_POST['quizNo'];
    $quiz = $_POST['quiz'];

    $sql = "UPDATE quiz SET qno='$quizNo', quiz='$quiz' WHERE id=$ID";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: updatequiz.php");
        exit;
    } else {
        echo "Error updating information: " . $conn->error;
    }
}
?>


<form action="updateQuiz.php?id=<?php echo $ID; ?>" method="post">
    <div class="form-group">
        <label for="quizNo">Quiz No:</label>
        <input type="text" id="quizNo" name="quizNo" value="<?php echo $qno; ?>" required>
    </div>
    <div class="form-group">
        <label for="quiz">Quiz:</label>
        <textarea id="quiz" name="quiz" rows="4" required><?php echo $quiz; ?></textarea>
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
