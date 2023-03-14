<?php

if(isset($_POST["event"])){
$eveName =$_POST['eventname'];
$eveDepartment=$_POST['branch'];

$description=$_POST['des'];
$structure=$_POST['st'];
$timeline=$_POST['time'];
$prizeMoney=$_POST['price'];
$contact_info=$_POST['phno'];
$minTeam=$_POST['min'];
$maxTeam=$_POST['max'];

$img_name=$_FILES['eimg']['name'];
$filesize=$_FILES['eimg']['size'];
$error=$_FILES['eimg']['error'];
$tmp_name=$_FILES['eimg']['tmp_name'];
if($error===0)
{
    if($filesize <= 4000000)
    {
        $img_type = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_type_lc = strtolower($img_type);
        $new_img_name=uniqid($eveName.'-',true).".".$img_type_lc;
        $img_upload_path='../eventsphotos/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
    }
    else
    {
        $em="sorry your file is too large";
        header("Location: event-upload.php?msg=$em");
    }
}

include "db_config.php";
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
} else {
    $stmt ="INSERT INTO competitions (eveName, eveDepartment, eveImg, description, structure , timeline, prizeMoney, contact_info,  minTeam, maxTeam) VALUES ('$eveName', '$eveDepartment', '$new_img_name', '$description', '$structure' , '$timeline',  '$prizeMoney', '$contact_info',  '$minTeam', '$maxTeam')";
    mysqli_query($conn,$stmt);
    $stmt->close();
    $mysqli->close();

    // Display success message as an alert
    $suc =  "Registration is successfully done";
    header("Location: event-upload.php?s=$suc");
}}





// delete the event
if (isset($_POST['evedel'])) {
    include "db_config.php";
    $conn = new mysqli($db_host, $db_user, $db_password, $db_db);
    $d = $_POST['id'];
    $smt = "DELETE FROM competitions WHERE eveSno = '$d'";
    mysqli_query($conn,$smt);
    
    $smt->close();
    $conn->close();
    $del =  "Event Delete successfully done";
    header("Location: event-upload.php?d=$del");
}

else{
    echo "not";
}
?>


