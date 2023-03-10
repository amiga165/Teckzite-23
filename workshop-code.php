<?php

include "db_config.php";


$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set parameters from form data
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$college = $_POST["collage"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$workshop = $_POST["workshop"];
$phone_number = $_POST["phno"];
$college_id = $_POST["cid"];

// Prepare SQL statement to insert data into database
$stmt = $conn->prepare("INSERT INTO workshops_reg (first_name, last_name, college, gender, email, workshop, phono, rollno) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters to SQL statement
$stmt->bind_param("ssssssss", $first_name, $last_name, $college, $gender, $email, $workshop, $phone_number, $college_id);



// Execute SQL statement
if ($stmt->execute() === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}

// Close MySQL connection
$conn->close();

?>
