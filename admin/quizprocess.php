

<?php
include("../config.php");

$quizno = $_POST['quizno'];
$quiz = $_POST['quiz'];


$sql = "INSERT INTO quiz (qno, quiz) VALUES ('$quizno', '$quiz')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Quiz Created Successfully.')</script>";
    
    header("location:addquiz.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>