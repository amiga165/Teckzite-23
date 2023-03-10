<?php
// Start the session
session_start();

// Check if user is logged in
if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection file
include("db_config.php");
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);


// Fetch user registrations from registrations table
$query = "SELECT * FROM events_reg WHERE tzid1='$user_id' OR tzid2='$user_id' OR tzid3='$user_id' OR tzid4='$user_id' OR tzid5='$user_id' OR tzid6='$user_id' OR tzid7='$user_id' OR tzid8='$user_id' OR tzid9='$user_id' OR tzid10='$user_id'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $team = array();
    for ($i = 1; $i <= $row['team_size']; $i++) {
        $tzid_col = "tzid" . $i;
        $tzid = $row[$tzid_col];
        if (!empty($tzid)) {
            $team[] = $tzid;
        }
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Teckzite | User Profile</title>
    <?php 
include "repeats/metatags.php"
?>
</head>
<body>
<?php 
include "repeats/header.php"
?>
    <h1>User Profile</h1>
    <p>Welcome, <?php echo $user['name']; ?>!</p>

    <h2>Registrations</h2>
    <table>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Registration Date</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['event_id']; ?></td>
            <?php
            $event_id = $row['event_id'];
            $query = "SELECT * FROM events_reg WHERE id='$event_id'";
            $result2 = mysqli_query($conn, $query);
            $event = mysqli_fetch_assoc($result2);
            ?>
            <td><?php echo $event['name']; ?></td>
            <td><?php echo $row['reg_date']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="logout.php">Log Out</a>


    <?php
include "repeats/footer.php"
?>
</body>
</html>
