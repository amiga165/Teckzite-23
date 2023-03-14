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

    $sql = "SELECT * FROM Registrations WHERE Id = '$tzid'";
   
  $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) == 0) {
        $error .= "Techzite ID $tzid is not registered for the fest.<br>";
    }
}

// Check if any of the Techzite IDs have already registered for the event
foreach ($tzids as $tzid) {
    if ($tzid == '-') {
        continue; // skip this iteration
    }

    $sqlqu = "SELECT * FROM events_reg WHERE event_id = '$event' AND (tzid1 = '$tzid' OR tzid2 = '$tzid' OR tzid3 = '$tzid' OR tzid4 = '$tzid' OR tzid5 = '$tzid' OR tzid6 = '$tzid' OR tzid7 = '$tzid' OR tzid8 = '$tzid' OR tzid9 = '$tzid' OR tzid10 = '$tzid')";
    $res = mysqli_query($conn,$sqlqu);

    if (mysqli_num_rows($res) > 0) {
        $error .= "Techzite ID $tzid is already registered for this event.<br>";
    }
}

// If there are no errors, insert the data into the event table
if (empty($error)) {
    $sql = "INSERT INTO events_reg (event_id, teamsize, branch, tzid1, tzid2, tzid3, tzid4, tzid5, tzid6, tzid7, tzid8, tzid9, tzid10) VALUES ('$event', '$teamsize', '$branch', '$tzids[0]', '$tzids[1]', '$tzids[2]', '$tzids[3]', '$tzids[4]', '$tzids[5]', '$tzids[6]', '$tzids[7]', '$tzids[8]', '$tzids[9]')";

    mysqli_query($conn, $sql);
    
    mysqli_close($conn);

    include('event_status-card.php');
} else {

    mysqli_close($conn);

    include('event_reg_fail.php');
}
?>
