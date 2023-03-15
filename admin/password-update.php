<?php

include "db_config.php";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['forpass']))
{
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the tzid exists in the registrations table
    $sql = "SELECT * FROM registrations WHERE Id='$mail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Update the password in the registrations table
        $pass=md5($password);
        $sqli = "UPDATE registrations SET password= '$pass'  WHERE Id='$mail'";
        if ($conn->query($sqli) === TRUE) {
            echo "Password updated successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Invalid TZID";
    }

    // Close the database connection
    $conn->close();
    }


?>
