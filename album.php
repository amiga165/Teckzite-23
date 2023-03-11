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
    <li class="side-nav-list-items"><a href="events.php" class="side-nav-link">Competitions</a></li>
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
          <li class="sub-elements"><a href="events.php">Competitions</a></li>
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

  <!-- Background -->
  <div class="background-container-events">
    <div class="parallax">
        <section class="wrapper">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </section>
    </div>
</div>  
<div class="main-album-container" style="width:80%;margin:100px 10% 30px 10%">
    <?php
    include "db_config.php";
    $conn= mysqli_connect($db_host, $db_user, $db_password, $db_db);
    $sql="SELECT * FROM album";
    $res=mysqli_query($conn,$sql);

    if($res->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
          if($row['id'] % 2 != 0)
          {?>
            <div class="album-flex content">
            <div class="sections-img EventIMG first"><img src="album/<?= $row['image'] ?>" alt=""></div>
                    <div class=" sections-details">
                        <div class="album-title"><?= $row['heading']." ".$row['eve_date'] ?></div>
                        <div class="album-event-details">
                            <?= $row['msg'] ?>
                        </div>
                        <div class="event-btn">
                            <button class="btn"><a href="<?= $row['link'] ?>" target="_blank">Read More</a></button>
                        </div>
                </div>
                
            </div>
          <?php
          }
          else{?>
            <div class="album-flex content">
            
                    <div class=" sections-details">
                        <div class="album-title"><?= $row['heading']." ".$row['eve_date'] ?></div>
                        <div class="album-event-details">
                            <?= $row['msg'] ?>
                        </div>
                        <div class="event-btn">
                            <button class="btn"><a href="<?= $row['link'] ?>" target="_blank">Read More</a></button>
                        </div>
                </div>
                <div class="sections-img EventIMG second"><img src="uploads/<?= $row['image'] ?>" alt=""></div>
            </div>
       <?php
       }
        }
    }
    ?>
  </div>
  <?php 
include "repeats/footer.php"
?>
</body>
</html>
<style>

    .album-flex{
      display: flex;
      align-items:center;
      width: 100%;
      max-width:800px;
      margin:10px auto;
      border-radius:10px;
      overflow:hidden;
      background:black;
    }
    .album-flex .sections-img{
      width: 200px;
      height: 200px;
      display: flex;
      align-items:center;
      justify-content:center;
    }
    .album-flex .sections-img img{
      width: 100%;
      height: 100%;
      border-radius:10px;
    }
    .album-flex .sections-details{
      width: calc(100% - 200px);
      padding-left:10px;
    }
    .album-title{
      width: 100%;
      height: 100%;
      text-align:center;
      color:#3fefef;
      font-size:22px;
      text-transform:capitalize;
    }
    .album-event-details{
      color:white;
      font-size:18px;
    }
    .album-flex .btn{
      padding: 0;
      margin: 0;
    }
    @media (max-width:650px){
      .album-flex{
        flex-direction:column;
      }
      .album-flex .sections-img{
        padding: 10px;
      }
      .album-flex .sections-details{
        width: 100%;
        padding: 10px;
      }
      .album-flex:nth-child(even) .sections-details{
        order:3;
      }

    }

 

    </style>
</style>