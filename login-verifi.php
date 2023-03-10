<?php
include "db_config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id, password FROM Registrations WHERE Email = ?"; // select id and password columns from database
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $row['id']; // store the user's ID in session
      mysqli_close($conn);
      header('Location: index.php');
      exit;
    } else {
      $error_msg = "Invalid password.";
    }
  } else {
    $error_msg = "Email not found.";
  }

  mysqli_close($conn);

  if (!empty($error_msg)) {
    header("Location: login.php?error=$error_msg");
    exit;
  }
}
?>
