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
    $sq=$conn->prepare("UPDATE `notifactions` SET notification_name=?,eventdate=?,eventmsg=?,evelink=?,eveactive=? WHERE id=0");
    $sq->bind_param('sssss',$name,$evdate,$msg,$link,$active);
    $sq->execute();
    if($sq)
    {
        echo 'successful';
    }
}
// elseif(isset($_POST['active']))
// {
//     $notification=$_POST['notify'];
//     $act=$_POST['check'];

//     $sql="UPDATE `notifactions` SET eveactive='$act' WHERE notification_name='$notification'";
//     if(mysqli_query($conn,$sql))
//     {
//         echo 'successful';
//     }
// }
?>