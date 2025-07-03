<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Employee Examination System</title>
    <link rel="stylesheet" href="css/style.css">


<style>

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}


/* Hero section styles */
.hero {
    background-color: #f4f4f4;
    text-align: center;
    padding: 100px 0;
}

.hero h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
}

/* Exam list styles */
.exam-list {
    list-style: none;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

.exam-list li {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 4px;
}

.exam-list h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.exam-list p {
    margin-bottom: 20px;
}




</style>
<script>
let slideIndex = [1,1];
/* Class the members of each slideshow group with different CSS classes */
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
} 

    </script>
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
                        <li class="alpha"><a href="contactus.php">Contact Us</a></li>
                        <li class="alpha"><a href="about.php">About Us</a></li>
                        <li class="alpharight"><a href="admin/index.php">Admin</a></li>
                        <li class="alpharight"><a href="register.php">Register</a></li>
                        <li class="alpharight"><a href="login.php">Log In</a></li>
                        
                    </ul>
                </center>
            </th>
        </tr>
    </table>
</div>


 <!-- Slideshow container -->
 <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/3.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 




<main>
        <section id="home">
            <div class="hero">
                <h1>Welcome to the Employee Examination System</h1>
                <p>Evaluate and enhance your skills with our comprehensive exams.</p>
                <a href="login.php" class="btn">Start Exam</a>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <center><h2>About Us</h2></center>
                <center> <p>We are dedicated to providing high-quality examinations to assess and improve employee skills and knowledge.</p></center>
            </div>
        </section>

        <section id="exams">
            <div class="container">
                <h2>Available Exams</h2>
                <ul class="exam-list">
                    <li>
                        <h3>Technical Exam</h3>
                        <p>Assess your technical skills and knowledge in various domains.</p>
                        <a href="technical-exam.html" class="btn">Take Exam</a>
                    </li>
                    <li>
                        <h3>Aptitude Exam</h3>
                        <p>Evaluate your problem-solving and analytical skills.</p>
                        <a href="aptitude-exam.html" class="btn">Take Exam</a>
                    </li>
                </ul>
            </div>
        </section>

</div></div>
<br>

<section id="WHYUS">
            <div class="container">
                <center><h2>WHY US?</h2></center>
                </div>
        </section>

        <section id="whyus2">
            <div class="container">
                <ul class="exam-list">
                    <li><center>
                        <h3>Comprehensive Exam Coverage</h3>
                        <p>We offer a wide range of exams to thoroughly assess employee skills and knowledge across various domains. </p>
                    </li><center>
                    <li>
                        <h3>Cutting-Edge Technology Platform</h3>
                        <p>Our state-of-the-art examination system leverages the latest technologies to provide a seamless and engaging assessment experience</p>
                    </li>
                    <!-- Add more exam items as needed -->
                </ul>
            
        </section>
        <section id="whyus2">
            <div class="container">
                <ul class="exam-list">
                    <li><center>
                        <h3>Proven Expertise and Track </h3>
                        <p>With years of experience in employee assessments, we have a proven track record of success</p>
                    </li><center>
                    <li>
                        <h3>Flexibility and Customization</h3>
                        <p>We understand that every organization has unique assessment needs. That's why we offer</p>
                    </li>
                    <!-- Add more exam items as needed -->
                </ul>
            </div>
        </section>

    </main>

    <br>

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

