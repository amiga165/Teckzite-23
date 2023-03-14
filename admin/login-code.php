<?php
include "db_config.php";
session_start();

if(isset($_SESSION["admin_id"])) {
    header("Location: index.php");
}

if(isset($_POST['admin'])) {

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL query to retrieve admin with matching id and password
    $stmt = "SELECT * FROM `admin`";
    $result = mysqli_query($conn,$stmt);
    $check=0;
    while($row=mysqli_fetch_assoc($result))
    {
        if(($row['user_name'] == $_POST['aid']) && ($row['password'] == $_POST['adpass']))
        {
            $_SESSION['admin_id']=$row['user_name'];
            header("Location: index.php");
            $check=1;

        }
    }
    if($check==0)
    {
        header("Location: login.php");
    }

    // Close database connection
    mysqli_close($conn);
}
?>

