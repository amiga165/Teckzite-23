<?php
include "db_config.php";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['work']))
{
    $wname=$_POST['workshop'];
    $branch=$_POST['branch'];
    $info=$_POST['info'];
    $desc=$_POST['des'];
    $amt=$_POST['amount'];
    $venue=$_POST['vt'];
    $duration=$_POST['duration'];
    $phno=$_POST['phno'];
    $img_name=$_FILES['wimg']['name'];
    $error=$_FILES['wimg']['error'];
    $tmp_name=$_FILES['wimg']['tmp_name'];
    if($error == 0)
    {
        $img_type = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_type_lc = strtolower($img_type);
        $new_img_name=uniqid('IMG-',true).".".$img_type_lc;
        $img_upload_path='../workshops/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
        $sql=$conn->prepare("INSERT INTO workshops(wrk_name,branch,wrk_info,wrk_des,amaount,venue_time,duration,ph_no,photo) VALUES (?,?,?,?,?,?,?,?,?)");
        $sql->bind_param('sssssssss',$wname,$branch,$info,$desc,$amt,$venue,$duration,$phno,$new_img_name);
        $sql->execute();
        if($sql)
        {
            echo 'successful';
        }
    }
    
    
}
?>