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


$sql = "SELECT * from tempbook";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $pnr = $row["pnr"];
    $coach = $row["coachnum"];
    $station = $row["station"];
    $age = $row["agecategory"];
    $gender = $row["gender"];
    $name = $row["name"];
    $luggage = $row["noluggage"];
    $sql = "delete from tempbook where pnr = $pnr";
    $conn->query($sql);

    $sql = "insert into bookingtable values($pnr, '$coach', '$station', '$age', '$gender', '$luggage','$name');";
    $conn->query($sql);
 }
 header("Location: ../greeting.html");
?>