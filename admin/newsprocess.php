

<?php
include("../config.php");

$title = $_POST['title'];
$description = $_POST['description'];


$sql = "INSERT INTO announcements (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:managenews.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>