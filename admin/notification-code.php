<?php
include "db_config.php";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['submit']))
{
    $name=$_POST['notification'];
    $evdate=$_POST['date'];
    $msg=$_POST['message'];
    $link=$_POST['elink'];
    $active="YES";
    $sq="UPDATE `notifactions` SET notification_name='$name',eventdate='$evdate',eventmsg='$msg',evelink='$link',eveactive='$active' WHERE id=0";
    mysqli_query($conn,$sq);
    $not="notification successfully updated";
    header("Location: notification.php?noti=$not");
    $mysqli->close();
}

?>