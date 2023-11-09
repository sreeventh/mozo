<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NGOdb";

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
    $name = $row["name"];
    $coach = $row["coachnum"];
    $station = $row["station"];
    $age = $row["agecategory"];
    $gender = $row["gender"];
    $sql = "delete from tempbook where pnr = $pnr";
    $conn->query($sql);

 }
 header("Location: ../greeting.html");
?>