<?php
include "db_config.php";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(isset($_POST['workshopcheck']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $clg=$_POST['college'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $wrkshop=$_POST['workshop'];
    $phone=$_POST['phno'];
    $clgid=$_POST['cid'];
    $paid=100;
    $sql="INSERT INTO  workshops_reg (workshop,first_name,last_name,college,gender,email,phono,rollno,paid) VALUES('$wrkshop','$fname','$lname','$clg','$gender','$email','$phone','$clgid','$paid')";
    if(mysqli_query($conn,$sql))
    {
        $wrk="workshop registration successful";
        header("Location: workshops.php?wrksuccess=$wrk");
    }

    
    
}


?>