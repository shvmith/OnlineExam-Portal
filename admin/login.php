
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Log In</title>
    <link rel="stylesheet" href="style.css">

    <style>
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .signup {
            text-align: center;
        }

        .signup a {
            color: #333;
            text-decoration: none;
        }
    </style>

</head>
<body>
<div class="header">
    <table width="100%" border="0">
        <tr>
           
            <th>
                <center><img class="logo" src="admin/logo.png" width="160" height="60"></center>
            </th>
        </tr>
        <tr>
            <th>
                <center>
                    <ul class="menu">
                        <li class="alpha"><a href="index.php">Home</a></li>
                        <li class="alpharight"><a href="index.php">Admin</a></li>
                        <li class="alpharight"><a href="register.php">Register</a></li>
                        <li class="alpharight"><a href="login.php">Log In</a></li>
                        
                    </ul>
                </center>
            </th>
        </tr>
    </table>
</div>





<div class="container">
        <h1>Admin Login</h1>
        <form action="processlogin.php" method="post">

            <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <label> Username: </label>
            <div class="form-group">
            <input type="text" name="username" placeholder="Username" required> <br>
            <label> Password: </label>
            <div class="form-group">
            <input type="password" name="password" placeholder="password" required><br>

            <button type="submit"> Login </button> 
        </form>
    </div>
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


