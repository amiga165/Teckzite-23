<?php
include "db_config.php";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['wrkshop']))
{
    $wname=$_POST['wrkname'];
    $branch=$_POST['branch'];
    $info=$_POST['st-des'];
    $desc=$_POST['des'];
    $amt=$_POST['amt'];
    $venue=$_POST['venue and time'];
    $duration=$_POST['Duration'];
    $phno=$_POST['ph_no'];
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
            $wk="uploaded successfully done";
            header("Location: workshop-upload.php?work=$wk");
        }
    }
    
    
}
elseif(isset($_POST['wrkdel']))
{
    $id=$_POST['id'];
    $delsql=$conn->prepare("DELETE FROM workshops WHERE id=?");
    $del->bind_param("i",$id);
    $del->execute();
    if($del)
    {
        $workdel="deleted successfully";
        header("Location: workshop-upload.php?wrkdel=$workdel");
    }
}

?>