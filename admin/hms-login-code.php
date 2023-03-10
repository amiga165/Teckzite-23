<?php 
include "db_config.php";

session_start();

if(isset($_SESSION["hms_admin_id"])) {
    // If the session variable is set, the user is already logged in, so redirect to HMS page
    header("Location: HMS.php");
}

$error_msg = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_id = $_POST["admin"];
    $password = $_POST["password"];

    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);


    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL query to retrieve admin with matching id and password
    $stmt = mysqli_prepare($conn, "SELECT * FROM `HMS-admins` WHERE user_name=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $admin_id, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        // If user exists, create session and redirect to HMS page
        $_SESSION["hms_admin_id"] = $admin_id;
        header("Location: HMS.php");
    } else {
        header("Location: HMS.php");
    }

    mysqli_close($conn);
}

?>


