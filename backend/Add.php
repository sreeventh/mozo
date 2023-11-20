<?php
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

try {
    $conn->begin_transaction();

    $sqlSelect = "SELECT * FROM tempbook";
    $result = $conn->query($sqlSelect);

    $cname = $_SESSION['username'];

    while ($row = $result->fetch_assoc()) {
        $pnr = $row["pnr"];
        $coach = $row["coachnum"];
        $station = $row["station"];
        $age = $row["agecategory"];
        $gender = $row["gender"];
        $name = $row["name"];
        $luggage = $row["noluggage"];

        // INSERT into bookingtable
        $sqlInsert = "INSERT INTO bookingtable (pnr, coachnum, station, agecategory, gender, noluggage, name) VALUES ('$pnr', '$coach', '$station', '$age', '$gender', '$luggage', '$name')";
        if ($conn->query($sqlInsert) !== TRUE) {
            throw new Exception("Error in INSERT query: " . $conn->error);
        }

        // DELETE from tempbook
        $sqlDelete = "DELETE FROM tempbook WHERE pnr = '$pnr'";
        if ($conn->query($sqlDelete) !== TRUE) {
            throw new Exception("Error in DELETE query: " . $conn->error);
        }
    }

    $conn->commit();
    echo '<script language="javascript">';
    echo 'alert("Booking Confirmed")';
    header("Location: ../greeting.html");
    echo '</script>';
} catch (Exception $e) {
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
