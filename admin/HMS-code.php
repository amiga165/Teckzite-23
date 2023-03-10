<?php
include "db_config.php";


$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

$tzid = strtoupper($_POST['tzid']);

// Check if there is already an entry in the database for the given tzid
$existing_entry_query = "SELECT tzid FROM HMS WHERE tzid = '$tzid'";
$existing_entry_result = $mysqli->query($existing_entry_query);
if ($existing_entry_result->num_rows > 0) {
    header("Location: card-already.html");
    exit();
}

$gender_query = "SELECT gender FROM registrations WHERE id = '$tzid'";
$gender_result = $mysqli->query($gender_query);
if ($gender_result->num_rows === 0) {
    header("Location: card-1.html");
    exit();
}
$gender_row = $gender_result->fetch_assoc();
$gender = $gender_row['gender'];

if ($gender === 'Male') {
    $block = "I3-Left-wing";
    $available_rooms = array(4, 5, 7, 8, 9);
} else {
    $block = "I3-Right-wing";
    $available_rooms = array(10, 14, 15);
}

$room = null;
foreach ($available_rooms as $available_room) {
    // Check if the room is already full
    $room_query = "SELECT COUNT(*) AS count FROM HMS WHERE Block = '$block' AND Room = '$available_room'";
    $room_result = $mysqli->query($room_query);
    $room_row = $room_result->fetch_assoc();
    $count = $room_row['count'];
    if ($count < 6) {
        $room = $available_room;
        break;
    }
}

if (!$room) {
    header("Location: card-1-roomful.html");
    exit();
}

date_default_timezone_set('Asia/Kolkata');
$checkin_time = date('Y-m-d H:i:s');
$checkout_time = "NOT YET";

$stmt = $mysqli->prepare("INSERT INTO HMS (tzid, Block, Room, Checkin, Checkout) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $tzid, $block, $room, $checkin_time, $checkout_time);

$stmt->execute();
header("Location: card-2.html");

$stmt->close();
$mysqli->close();
?>
