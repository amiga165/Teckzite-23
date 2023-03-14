<?php
include "db_config.php";
session_start();

if(isset($_SESSION["admin_id"])) {
    header("Location: index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST["admin"];
    $password = $_POST["password"];

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL query to retrieve admin with matching id and password
    $stmt = "SELECT * FROM admin WHERE user_name=$admin_id AND password=$password";
    $result = mysqli_query($conn,$stmt);

    if(mysqli_num_rows($result) == 1) {
        // If user exists, create session and redirect to index page
        $_SESSION["admin_id"] = $admin_id;
        header("Location: index.php");
    } else {
        // If user doesn't exist, show error message
        header("Location: login.html");
    }

    // Close database connection
    mysqli_close($conn);
}
?>

