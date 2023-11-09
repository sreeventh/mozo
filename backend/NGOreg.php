<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngoDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["Name"];
$uname = $_POST["UName"];
$pass = $_POST["Password"];
$rpass = $_POST["Pass"];
// $web = $_POST["Web"];

if($pass != $rpass)
{
    echo '<script>window.alert("Password mismatch!")</script>';
    header("Location: ../NGOPorterlogin.html");
    
}
else
{

    $sql = "INSERT INTO ngologin ( uname,name, password ) VALUES ('$name' , '$uname' , '$pass')";
    $conn->query($sql);
    header("Location: ../NGOPorterlogin.hmtl");
}

?>