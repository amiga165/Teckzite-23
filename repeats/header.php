<?php
session_start();

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
    <li class="side-nav-list-items"><a href="temp.php" class="side-nav-link">Highlights</a></li>
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
