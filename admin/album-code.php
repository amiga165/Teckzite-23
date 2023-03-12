<?php
include "db_config.php";
$conn = new mysqli($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['album']))
{
    $head=$_POST['heading'];
    $date=$_POST['date'];
    $msg=$_POST['message'];
    $lnk=$_POST['link'];
    $img_name=$_FILES['Image']['name'];
    $error=$_FILES['Image']['error'];
    $tmp_name=$_FILES['Image']['tmp_name'];
    if($error == 0)
    {
        $img_type = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_type_lc = strtolower($img_type);
        $new_img_name=uniqid('IMG-',true).".".$img_type_lc;
        $img_upload_path='../album/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
        $sql=$conn->prepare("INSERT INTO album (heading,eve_date,msg,link,image) VALUES (?,?,?,?,?)");
        $sql->bind_param('sssss',$head,$date,$msg,$lnk,$new_img_name);
        $sql->execute();
        $alb="successfully uploaded album";
        header("Location: album-upload.php?al=$alb");
    }
    
    
}
// delete the album
if (isset($_POST['albdel'])) {
    include "db_config.php";
    $conn = new mysqli($db_host, $db_user, $db_password, $db_db);
    $d = $_POST['id'];
    $smt = $conn->prepare("DELETE FROM album WHERE id = ?");
    $smt->bind_param("i", $d);
    $smt->execute();
    
    $smt->close();
    $conn->close();
    $aldel =  "Delete successfully done";
    header("Location: album-upload.php?albd=$aldel");
}

else{
    echo 'not';
}
?>
