

<?php
include("../config.php");

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];


$sql = "INSERT INTO events (name, date, time, description) VALUES ('$name', '$date', '$time', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:eventsmanage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>