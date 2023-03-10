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
    $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE user_name=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $admin_id, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

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

