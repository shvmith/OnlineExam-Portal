<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage User</title>
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










<div class="containeruser">
    <h1>Manage User</h1>
    <table class="contact-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birth Day</th>
                <th>ID</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("../config.php");

            $sql = "SELECT id ,name, email, bday, IDno, pnumber  FROM user";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["bday"] . "</td>";
                    
                    echo "<td>" . $row["IDno"] . "</td>";
                    echo "<td>" . $row["pnumber"] . "</td>";
                    echo "<td><a href='updateuser.php?id=" . $row["id"] . "' class='update-btn'>Update</a></td>"; 
                    echo "<td><a href='deleteu.php?id=" . $row["id"] . "' class='delete-btn'>Delete</a></td>"; 
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
    $conn->close();
?>
        </tbody>
    </table>
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
