<?php

include "db_config.php";

$id = 'tz' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
$tzid = $_POST['tzid'];
$block = $_POST['block'];
$room = $_POST['room'];
$checkin_time = $_POST['checkin_time'];
$checkout_time = 0;

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
} else {
    $stmt = $mysqli->prepare("INSERT INTO EMS (tzid,Block,Room,Checkin,Checkout) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $tzid, $block, $room, $checkin_time, $checkout_time);
    
    $stmt->execute();
    echo "Registration is successfully done";
    $stmt->close();
    $mysqli->close();
}

// Add the following code to update the checkout time for a particular tzid
if (isset($_POST['checkout'])) {
    $tzid = $_POST['tzid'];
    $checkout_time = date('Y-m-d H:i:s');
    
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

    if ($mysqli->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
    } else {
        $stmt = $mysqli->prepare("UPDATE HMS SET Checkout = ? WHERE tzid = ?");
        $stmt->bind_param("ss", $checkout_time, $tzid);

        $stmt->execute();
        echo "Checkout is successfully done";
        $stmt->close();
        $mysqli->close();
    }
}
?>
