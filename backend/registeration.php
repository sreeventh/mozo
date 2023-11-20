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

// Get user input
$uname = $_POST["Username"];
$email = $_POST["Email"];
$pass = $_POST["Password"];
$rpass = $_POST["Pass"];
$num = 0;

// Check if passwords match
if ($pass != $rpass) {
    echo '<script>window.alert("Password mismatch!")</script>';
    header("Location: ../registration.html");
} else {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO login (uname, email, pass, active) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $uname, $email, $pass, $num);
    $stmt->execute();
    $stmt->close();

    // Update the 'active' table
    $stmt0 = $conn->prepare("UPDATE active SET user = ? WHERE Now = 'Now'");
    $stmt0->bind_param("s", $uname);
    $stmt0->execute();
    $stmt0->close();

    // Redirect to the index page
    header("Location: ../index.html");
}

// Close the database connection
$conn->close();

?>
