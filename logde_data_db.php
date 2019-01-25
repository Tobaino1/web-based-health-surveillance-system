<?php
 $disease_name = $_POST['disease_name'];
 $possible_symptoms= $_POST['possible_symptoms'];
 $area_community=$_POST['area_community'];
 $affected_people=$_POST['affected_people'];
 $spread_mortality_rate=$_POST['spread_mortality_rate'];
  $no_times_occured=$_POST['no_times_occured'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "health_surveillance_system");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO disease (disease_name, possible_symptoms, area_community, affected_people, spread_mortality_rate, no_times_occured)
VALUES ('$disease_name', '$possible_symptoms', '$area_community', '$affected_people','$spread_mortality_rate','$no_times_occured' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>