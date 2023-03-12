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
  <link href="assets/css/stars.css" rel="stylesheet">
 
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

<div class="index-center-img">
      <img src="assets/img/hero.png">
    </div>
<style>
    .index-center-img{
      position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
      width: 480px; 
      height: 480px;
      overflow:hidden;
      z-index:-1;
    }
    .index-center-img img{
      height: 100%;
      width: 100%;
    }
    @media (max-width:992px){
     .index-center-img{
      width: 400px;
      height: 400px;
     }
    }
    @media (max-width:450px){
      .index-center-img{
        width: 300px;
        height: 300px;
      }
    }
</style>


<section class="bg-space">
    <div class="set">
      <div class="img1">
        <img src="assets\img\rock.png" width="150%" height="150%">
      </div>
      <div class="img2">
        <img src="assets\img\rock.png" width="100%" height="100%">

      </div>
      <!-- satellite image started-->
      <div class="img3">
        <img src="assets\img\rock.png" width="100%" height="100%">
      </div>
      <div class="img4">
        <img src="assets\img\rock.png" width="50%" height="50%">

      </div>
      <div class="img5">
        <img src="assets\img\rock.png" width="100%" height="100%">

      </div>
     

    </div>
</section>
  <style>
  
    .bg-space {
      z-index:-10;
        position: absolute;
        width:100%;
        height: 100vh;
        top:0;
        left:0;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: transparent;
      }
      .set div{
        width: 100px;
        height: 100px;
        margin: 10px;
      }
    .bg-space .set {
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
      }
    .bg-space .set div{
        position: absolute;
        display: block;
      }
    .bg-space .set div:nth-child(1){
        left: 30%;
        top: -20%;
        animation:one 10s linear infinite;
        
      }
      @keyframes one {
        0%{
          top: -20%;
          left: 30%;
          transform: rotate(0deg);
        }
        100%{
          left: 0;
          top: 100%;
          transform: rotate(90deg);
        }

      }
    .bg-space .set div:nth-child(2){
        right: 30%;
        top: 100%;
        animation:two 7s linear infinite;

        
      }
    .bg-space .set div:nth-child(2) img {
        transform: rotate(90deg);
      }
      @keyframes two {
        0%{
          right:30%;
          top: 100%;
        }
        
        100%{
          right:-30%;
          top: 50%;
        }

      }
    .bg-space .set div:nth-child(3){
        position: relative;
        left: 30%;
        top: 100%;
        animation:three 10s linear infinite;

      }
      
      @keyframes three {
        0%{
          transform: rotate(0deg);
          left: 30%;
          top: 100%;
        }
        100%{
          transform: rotate(60deg);
          left: 0%;
          top: 0%;
        }

        
      }
    .bg-space .set div:nth-child(3) img{
        transform: rotate(-60deg);
      }
    .bg-space .set div:nth-child(4){
        left: 100%;
        bottom: 0%;
        animation:four 8s linear infinite;

        
      }
      @keyframes four {
        0%{
          opacity: 0.5;
          bottom: 0;
          transform: rotate(0deg);
        }
        100%{
          opacity: 1;
          left: 65%;
          bottom: 100%;
          transform: rotate(90deg);
        }
      }
    .bg-space .set div:nth-child(5){
        left: 00%;
        top: -10%;
        animation:five 8s linear infinite;
    
        
      }
      @keyframes five {
        0%{
          opacity: 0.5;
          left: 00%;
          top: -10%;
          transform: rotate(0deg);
        }
        100%{
          opacity: 1;
          left: 30%;
          top: 100%;
          transform: rotate(90deg);
        }
      }
      .bg-space .set div:nth-child(6){
        top:10%;
        right:5%;
        width: 150px;
        height: 150px;
        transform:rotate(30deg);
        animation: moveabit 5s ease infinite;
      }
      @keyframes moveabit {
        0%{top:10%}
        50%{top:5%}
        100%{top:10%}
      }
    

      @media (max-width:425px){
        .set div{
          width: 70px;
          height: 70px;
        }
        @keyframes one {
          0%{
            left: -30%;
            top: 65%;
            transform: rotate(0deg);
          }
          100%{
            top: 100%;
            left: 100%;
            transform: rotate(90deg);

          }
        }
        @keyframes five{
          0%{
            top: 100%;
            left: 30%;
            transform: rotate(0deg);

          }
          100%{
            top: 50%;
            left: -20%;
            transform: rotate(90deg);

          }
        }
      .bg-space .set div:nth-child(3){
          width: 100px;
          height: 100px;
        }
      .bg-space .set div:nth-child(3){
          animation-duration: 6s;
        }
        @keyframes three{
          0%{
            left: 100%;
            top: 100%;
          }
          100%{
            top: 70%;
            left: -40%;
          }
        }
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