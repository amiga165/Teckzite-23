<!DOCTYPE html>
<html lang="en">
  
  <head>
 
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Teckzite | Home</title>
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

</head>

<body>
<?php 
include "repeats/header.php"
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

<div class="main-img-container">
  <img src="assets/img/Group 2.png" >
</div>
<style>
  .main-img-container{
    position:absolute;
    z-index:-1;
    width: 100%;
    height:100vh;
    top: 0;
    left: 0;
  }
  .main-img-container img{
    width: 100%;
    height: 100vh;
  }
</style>


<?php
  include "db_config.php";
  $conn = mysqli_connect($db_host,$db_user,$db_password,$db_db);
  $sql="SELECT * FROM notifactions";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($res))
  {
    if($row['eveactive'] == 'YES')
    {?>
      <div  class="toast-container">
        <div class="image"><img src="assets/img/buzzer.webp" alt="" ></div>
        <div class="text-content">
          <h3>
            <?php echo $row['eventmsg'] ?>
            <br>Please <a href="<?php echo $row['evelink'] ?>" style="pointer-events:all">click here</a> to know more.
          </h3>
          <p class="author-name"><?php echo $row['notification_name']." ".$row['eventdate'] ?></p>
        </div>
        <div><img class="close" style="pointer-events:all" src="assets/img/close-icon.webp"  alt="close Button" /> </a></div>
      </div>
   <?php }
  }
?>

<div class="preloader-container" id="preloader">
            <img src="assets/img/pngegg.png" class="box-type-thing">
            <img src="assets/img/intro 3.gif" class="logo-part">
</div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  
    <?php
include "repeats/footer.php"
?>
<style>
  footer{
    position:absolute;
  }
</style>





  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
      
      
  <!-- Template Main JS File -->
  <script src="assets/js/script.js"></script>
  

</body>

</html>