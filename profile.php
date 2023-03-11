<?php
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Teckzite | User Profile</title>
  <?php 
include "repeats/metatags.php"
?>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet">
  <link href="assets/css/stars.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/workshop.css"> -->
  <link rel="stylesheet" href="assets/css/sub.css">

    <?php

    include "db_config.php";
    
    if(isset($_SESSION['id'])) {
      $id =$_SESSION['id'];
      echo $id;  
      } 
    ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-kp/1K/VYYXYtR45Th7g72KjzKk7seuHvX9m7nK04g/YJaG7fHw2zJMY7RtR5D7yJd60Ru1I7LzfvCZ5r5qF+5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{
        padding: 0;
        margin: 0;
      }
      body{
        background-color: black;
        min-height: 100vh;
      }
      section{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: auto;
      }
      section .profile-card{
        width: 240px;
        height: auto;
        background-color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 20px;

      }
      section .profile-card .heading{
        color: white;
        letter-spacing: 4px;
        font-weight: 700;
      }
      section .profile-card .prof-img{
        width: 150px;
        height: 150px;
        background-color: white;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
      } 
      section .profile-card .prof-img img{
        width: 95%;
        height: 95%;
        border: 3px solid black;
        border-radius: 50%;
        overflow: hidden;
      }
      section .profile-card .prof-ID{
        color: aqua;
        font-family: 'Potta One';
        font-size: 1.2rem;
        font-weight: 700;
        letter-spacing: 2px;
      }
      section .profile-card .prof-mail{
        color: grey;
      }
      section .profile-card div{
        margin-top: 20px;
      }
      .E-content{
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        width: 100%;
        
      }
      .E-content .E-heading{
        font-family: arial;
        color:aqua;
        font-size: 25px;
        text-align: center;
      }
      .E-content .E-card-banner{
        width: 100%;
        height: auto;
        
      }
      .E-content .E-card-banner .heading{
        font-size: 20px;
        color: white;
        text-align: center;
      }
      .E-content .E-card-banner .row{
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        flex-wrap: wrap;
      }


      /* card css */
      .card{
      width: 250px;
      height: 350px;
      background: rgba(13, 12, 12, 0.77);
      box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
      backdrop-filter: blur(20px);
      display: flex;
      flex-direction: column;
      position: relative;
      border-radius: 6px;
      overflow: hidden;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .card .content{
      width: 100%;
      height: 60%;
      position: absolute;
      left: 0;
      bottom: 0;
      background: rgba(13, 12, 12, 0.77);
      box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
      backdrop-filter: blur(20px);
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }
    .card .content .row{
      margin-top:5px ;
    }
    .card .content .row .info{
      color: aqua;
      margin-left: 10px;
    }
    .card .content .row .val{
      margin-left: -40px;
    }
       </style>
</head>
<body>
    <?php

echo '<div class="side-nav">
<div class="close-btn">
    <i class="bi bi-x navbar-icon"></i>
</div>
<ul class="side-nav-list" style="padding-top:100px">';

if(isset($_SESSION['id'])) {
  echo '<li class="side-nav-list-items"><a href="profile.php" class="side-nav-link">Profile.'.$_SESSION['id'].'</a></li>';
  echo '<li class="side-nav-list-items"><a href="logout-code.php" class="side-nav-link">Log Out</a></li>';

} else {
  echo '<li class="side-nav-list-items"><a href="login.php" class="side-nav-link">Log In</a></li>';
  echo '<li class="side-nav-list-items"><a href="register.php" class="side-nav-link">Register</a></li>';
}

echo '<li class="side-nav-list-items"><a href="about.php" class="side-nav-link">About</a></li>
    <li class="side-nav-list-items"><a href="events.php" class="side-nav-link">Events</a></li>
    <li class="side-nav-list-items"><a href="workshops.php" class="side-nav-link">Workshops</a></li>
    <li class="side-nav-list-items"><a href="contact.php" class="side-nav-link">Contact</a></li>
    <li class="side-nav-list-items"><a href="speakers.php" class="side-nav-link">Speakers</a></li>
    <li class="side-nav-list-items"><a href="sponsers.php" class="side-nav-link">Sponsers</a></li>
    <li class="side-nav-list-items"><a href="schedule.php" class="side-nav-link">Schedule</a></li>
    <li class="side-nav-list-items"><a href="updates.php" class="side-nav-link">Updates</a></li>';


echo '</ul>
</div>
<nav class="header">
<div class="svg-line"><img src="assets/img/large-screen-hl.svg"></div>
<div class="hl">
  <div class="sub-elements d-block d-lg-none mx-auto pf"><i class="bi bi-person-circle"></i></div>
  <ul class="header-left-part d-none d-lg-flex">
          <li class="sub-elements"><a href="events.php">Events</a></li>
          <li class="sub-elements"><a href="workshops.php">Workshops</a></li>
          <li class="sub-elements"><a href="contact.php">contact</a></li>
  </ul>
</div>
<div class="header-img">
  <a href="index.php"><img src="assets/img/main-logo.png"></a>
</div>
<div class="hr">
  <div class="sub-elements d-block d-lg-none mx-auto"><i class="bi bi-filter-right navbar-icon"></i></div>
  <ul class="header-right-part d-none d-lg-flex">';

if(isset($_SESSION['id'])) {
    echo '<li class="sub-elements"><a href="profile.php">'.$_SESSION['id'].'/Profile</a></li>';
    echo '<li class="sub-elements"><a href="logout-code.php">Log Out</a></li>';
} else {
    echo '<li class="sub-elements"><a href="login.php">Log In</a></li>';
    echo '<li class="sub-elements"><a href="register.php" class="active">Register</a></li>';
}

echo '</
</ul>
</div>
</nav>';
?>


<?php
// create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
// check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// get the email for a specific ID number
$sql = "SELECT * FROM Registrations";
$res=mysqli_query($conn,$sql);
if($res->num_rows >0)
{
    while($row=mysqli_fetch_assoc($res))
    {
        if($row['Id'] == $id)
        {
            $email = $row['Email'];
        }
    }
}


// close the database connection
mysqli_close($conn);
?>



  <section>
    <div class="profile-card" style="margin-top:5%;">
      <div class="heading">PROFILE</div>
      <div class="prof-img">
        <img src="assests\image.png" alt="">
      </div>
      <div class="prof-ID"><?php echo  $id ?></div>
      <div class="prof-ID"> <?php echo $email?></div>
    </div>

  </section>
  <div class="E-content">
    <div class="E-heading">REGISTERED EVENTS</div>
    <hr style="margin:10px 20px;color:white;height:1px;background-color: aqua;">
    <div class="E-card-banner">
      <div class="heading">COMPETITIONS</div>
      <div class="row E-card">
  <?php
// create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
// check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// get the email for a specific ID number
$sql = "SELECT * FROM events_reg";
$everes=mysqli_query($conn,$sql);
$esql="SELECT * FROM competitions";
$comres=mysqli_query($conn,$esql);
if(($everes->num_rows >0) && ($comres->num_rows>0))
{
    while($row=mysqli_fetch_assoc($everes))
    {
        if(($row['tzid1'] == $id ) || ($row['tzid2'] == $id) || ($row['tzid3'] == $id)|| ($row['tzid4'] == $id)|| ($row['tzid5'] == $id) || ($row['tzid6'] == $id) || ($row['tzid7'] == $id) || ($row['tzid8'] == $id) || ($row['tzid9'] == $id) || ($row['tzid10'] == $id))
        {
          while($img=mysqli_fetch_assoc($comres))
          {
            if($row['event_id'] == $img['eveName'])
            { ?>
                <div class="card">
                <img src="eventsphotos/<?= $img['eveImg'] ?>" alt="" width="250px" height="290">
            <?php
            }
          }
            
           ?>
            
        <!-- first card started -->
        
          <div class="content">
            <div class="row ">
              <div class="col info  ">Event Name</div>
              <div class="col val text-white ">:-<?php echo $row['event_id'] ?></div>
            </div>
            <div class="row ">
              <div class="col info ">Team Size</div>
              <div class="col val text-white">:- <?php echo $row['teamsize'] ?></div>
            </div>
            <?php
            $team = array();
            for ($i = 1; $i <= $row['teamsize']; $i++) {
                $tzid_col = "tzid" . $i;
                $tzid = $row[$tzid_col];
                if (!empty($tzid)) {
                    $team[] = $tzid;
                    // echo $team[$i-1];
                    ?>
                    <div class="row ">
                        <div class="col info">Member</div>
                        <div class="col val text-white">:- <?php echo $team[$i-1] ?></div>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="row ">
              <div class="col info">Branch</div>
              <div class="col val text-white">:- <?php echo $row['branch'] ?></div>
            </div>
            
          </div>
  
        </div>
        <!-- first card ended -->
        <?php
        }
    }
}


// close the database connection
mysqli_close($conn);
?>
  
        


      </div>

    </div>
  </div>



</body>
</html>
