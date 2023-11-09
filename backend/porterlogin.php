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


$uname = $_POST["Name"];
$pass = $_POST["Password"];


$sql = "SELECT * FROM porterlogin WHERE name = '$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    if($row["passcode"]==$pass && $row["uname"]==$uname)
    {
        header("Location: ../portermain.php"); 
    }
    else {
        echo '<script>window.alert("Invalid Password")</script>';
        header("Location: ../NGOPorterlogin.html");
    }
  }
} else {
    echo '<script>window.alert("Invalid UserName")</script>';
    header("Location: ../NGOPorterlogin.html");
}

?>