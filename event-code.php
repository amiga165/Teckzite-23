<?php
include "db_config.php";

// Proceed with event registration
$event = $_POST['event_id'];
$teamsize = $_POST['tsize'];
$branch = $_POST['branch'];
$error = "";
$tzids = array_fill(0, 10, '-');

// Loop through the submitted form data to extract the Techzite IDs
for ($i = 1; $i <= $teamsize; $i++) {
    $tzid = $_POST['tzidNumber-' . $i];
    if (!empty($tzid)) {
        $tzids[$i - 1] = $tzid; // replace default '-' with actual tzid
    }
}

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if any of the Techzite IDs have already registered for the event
foreach ($tzids as $tzid) {
    if ($tzid == '-') {
        continue; // skip this iteration
    }

    $sql = "SELECT * FROM Registrations WHERE Id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $tzid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 0) {
        $error .= "Techzite ID $tzid is not registered for the fest.<br>";
    }
}

// Check if any of the Techzite IDs have already registered for the event
foreach ($tzids as $tzid) {
    if ($tzid == '-') {
        continue; // skip this iteration
    }

    $sql = "SELECT * FROM events_reg WHERE event_id = ? AND (tzid1 = ? OR tzid2 = ? OR tzid3 = ? OR tzid4 = ? OR tzid5 = ? OR tzid6 = ? OR tzid7 = ? OR tzid8 = ? OR tzid9 = ? OR tzid10 = ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssss", $event, $tzid, $tzid, $tzid, $tzid, $tzid, $tzid, $tzid, $tzid, $tzid, $tzid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $error .= "Techzite ID $tzid is already registered for this event.<br>";
    }
}

// If there are no errors, insert the data into the event table
if (empty($error)) {
    $sql = "INSERT INTO events_reg (event_id, teamsize, branch, tzid1, tzid2, tzid3, tzid4, tzid5, tzid6, tzid7, tzid8, tzid9, tzid10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sisssssssssss", $event, $teamsize, $branch, ...$tzids);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);

    include('event_status-card.php');
} else {

    mysqli_close($conn);

    include('event_reg_fail.php');
}
?>
