<?php

include "db_config.php";
$tzid = $_POST['tzid'];
$password = $_POST['password'];

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the tzid exists in the registrations table
$sql = "SELECT * FROM Registrations WHERE Id='$tzid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Update the password in the registrations table
    $sql = "UPDATE registrations SET password='$hashed_password' WHERE Id='$tzid'";
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully";
    } else {
        echo "Error updating password: " . $conn->error;
    }
} else {
    echo "Invalid TZID";
}

// Close the database connection
$conn->close();
?>
