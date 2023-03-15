<?php
include "db_config.php";

session_start();

if (isset($_POST['verifymail'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM registrations";
  $res=mysqli_query($conn,$sql);
  $check=0;
  if($res->num_rows>0)
  {
    while($row=mysqli_fetch_assoc($res))
    {
      if(($row['Email'] == $email) && ($row['password'] == md5($password)))
      {
        $_SESSION['email'] = $row['Email'];
        $_SESSION['tzid'] = $row['Id'];
        $check=1;
        header("Location: index.php");
        
      }
    }
    if($check == 0)
    {
      $error_msg = "Invalid email or password";
      header("Location: login.php?error=$error_msg");
    }
  }

  mysqli_close($conn);

  
}
?>
