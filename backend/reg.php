<!-- for some reason idk what the post request of un field from NGOreg.html is getting stored as name here  -->

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

// Debugging: Print contents of $_POST array
print_r($_POST);

// Assuming the form fields are named "name", "un", "Password", and "Pass"
$name = isset($_POST["Name"]) ? $_POST["Name"] : "";
$uname = isset($_POST["name"]) ? $_POST["name"] : "";
$pass = isset($_POST["Password"]) ? $_POST["Password"] : "";
$rpass = isset($_POST["Pass"]) ? $_POST["Pass"] : "";

if ($pass != $rpass) {
    echo '<script>window.alert("Password mismatch!")</script>';
    header("Location: ../NGOlogin.html");
} elseif (empty($uname) || empty($name) || empty($pass)) {
    echo "Error: Username, name, and password cannot be empty.";
} else {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO uslogin (uname, name, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $uname, $name, $pass);

    // Check if the statement was executed successfully
    if ($stmt->execute()) {
        // Redirect to the login page
        header("Location: ../NGOlogin.html");
    } else {
        // Display an error message if the execution fails
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();

?>
