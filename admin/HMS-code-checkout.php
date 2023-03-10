<?php
$tzidl = $_POST['tzid'];
$tzid=strtoupper($tzidl);
date_default_timezone_set('Asia/Kolkata');
$checkout_time = date('Y-m-d H:i:s');

include "db_config.php";


$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
} else {
    $stmt = $mysqli->prepare("UPDATE HMS SET Checkout = ? WHERE tzid = ?");
    $stmt->bind_param("ss", $checkout_time, $tzid);

    $stmt->execute();
    if($stmt->affected_rows === 0) {
        // If no rows were affected by the UPDATE query, show error message
        header("Location: card-1.html");
    } else {
        // Otherwise, redirect to success page
        $che=$tzid." is checkedout ".$checkout_time;
        header("Location: card-2.php?check=$che");
    }
    $stmt->close();
    $mysqli->close();
}
?>
