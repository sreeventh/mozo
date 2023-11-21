<?php

// Start or resume the session
session_start();

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

// Assuming the form fields are named "Name" and "Password"
$uname = $_POST["Name"];
$pass = $_POST["Password"];

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM uslogin WHERE name = ?");
if (!$stmt) {
    die("Error in prepare statement: " . $conn->error);
}

$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Use password_verify to check hashed passwords
    if ($pass == $row["password"]) {
        // Set the user's name in the session variable
        $_SESSION['username'] = $row["name"];
        header("Location: ../index.php");
    } else {
        echo '<script>window.alert("Invalid Password")</script>';
        header("Location: ../NGOlogin.html");
    }
} else {
    echo '<script>window.alert("Invalid UserName")</script>';
    header("Location: ../NGOlogin.html");
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();

// No exit() here, as there may be additional code after the database operations
?>
