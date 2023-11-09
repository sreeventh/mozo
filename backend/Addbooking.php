<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$pnr = $_POST["PNR"];
$coach = $_POST["coach"];
$station = $_POST["station"];
$agecat = $_POST["agecat"];
$gender= $_POST["gender"];
$luggage = $_POST["luggage"];



$sql = "INSERT INTO tempbook(pnr, coachnum, station, agecategory, gender, noluggage, name) 
VALUES('$pnr', '$coach', '$station', '$agecat', '$gender', '$luggage', 'Laasya');";
$conn->query($sql);

echo '<script language="javascript">';
        echo 'alert("Airport Inserted")';
        echo '</script>';

$conn->close();
// sleep(10);
header("Location: ../booking.html");

?>