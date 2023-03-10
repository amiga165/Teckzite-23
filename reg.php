<?php 
include "db_config.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$collage = $_POST['collage'];
$year = $_POST['year'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$dist = $_POST['dist'];
$state = $_POST['state'];
$phno = $_POST['phno'];
$pass = $_POST['cpass'];
$clgid = $_POST['cid'];
// $photo=$_POST['image'];
$Paid = 250;
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

if ($conn->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
} else {
    // Generate a new unique primary key value
    $stmt = $conn->prepare("SELECT MAX(CAST(SUBSTRING(Id, 7) AS UNSIGNED)) AS max_id FROM Registrations WHERE Id LIKE 'TZ2k23%'");
    $stmt->execute();
    $stmt->bind_result($max_id);
    $stmt->fetch();
    $stmt->close();
    $new_id = 'TZ2K23' . str_pad($max_id+1, 4, '0', STR_PAD_LEFT);

    // Hash the password for security
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Insert the new record with the new primary key value
    $img_name=$_FILES['image']['name'];
    $error=$_FILES['image']['error'];
    $tmp_name=$_FILES['image']['tmp_name'];
    if($error===0)
    {
        $img_type = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_type_lc = strtolower($img_type);
        $new_img_name=uniqid($new_id.'-',true).".".$img_type_lc;
        $img_upload_path='uploads/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
        // $sql="INSERT INTO id_photo(image_url) VALUES('$new_img_name')";
        $stmt = $conn->prepare("INSERT INTO Registrations (Id ,First_name, Last_name, Collage, Year, Gender, Email, City, District, State, Phone_no, Paid, password, id_card_photo, clgid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssisss", $new_id, $firstname, $lastname, $collage, $year, $gender, $email, $city, $dist, $state, $phno, $Paid ,$hashed_pass , $new_img_name, $clgid);
        $stmt->execute();
        if($stmt)
        {
        $yes="Registration is successfully done";
            echo 'registrion successfully dont';

        }
        

        $stmt->close();
        $conn->close();
    }
    
}
?>