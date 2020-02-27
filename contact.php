<?php
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



// Create connection
$conn = mysqli_connect("localhost", "root", "", "health_surveillance_system");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO feedback (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";


if (mysqli_query($conn, $sql)) {
    echo "your feedback has been successfully sent";
    header("Location: feedback_success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>