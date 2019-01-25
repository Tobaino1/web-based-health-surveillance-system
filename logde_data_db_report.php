<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 1/22/2019
 * Time: 4:20 PM
 */
?>

<?php
$user = $_POST['user'];
$parent= $_POST['parent'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "health_surveillance_system");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO report (user, parent)
VALUES ('$user','$parent' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
