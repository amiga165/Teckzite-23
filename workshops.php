<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Workshop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
<div class="planet-area">
  <div class="bg-section">
      <img src="assets/img/earth.png" class="img-fluid">
      <div class="text-part">
          <svg class="side-heading">
              <text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">
                  Workshops
              </text>
          </svg>
      </div>
      <div class="down-arrow">
        <img src="assets/img/down.png">
    </div>
  </div>
</div>

  
  <!-- End Header Section -->
  <!-- ======= Hero Section ======= -->

  
<!-- seminars -->


<!-- end seminars -->

<?php
include "repeats/footer.php"
?>


 
  <style>
    .info{
      font-size: 15px;
    }
    .fee{
      color:#3efefe;
      font-size:22px;
      font-weight: 450;
    }
    .extra{
      color: #3eefef;
      font-size:18px;
      font-weight: 420;
    }
    .extra span{
      color:white;
    }
    .modal{
      backdrop-filter: blur(25px);

    }
    .modal-content{
      border: 2px solid transparent;
      background: linear-gradient(71deg, #080509, #1a171c, #080509);
      background-clip: padding-box;
      border-radius: 25px;
      padding: 20px;
    }
    .modal-title.sure{
      font-family: myFirstFont;
      font-size: 24px;
      text-transform: uppercase;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .modal-body .workshop-info{
      color:white;
      font-size: 18px;
      font-weight: 250;
    }
    .flex-div{
      display: flex;
      justify-content: space-between;
    }
    .one-line-imp span{
      color:white;
    }
    .flex-div>*{
      margin-top: 5px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
      height: fit-content;
    }
    .one-line-imp{
      font-size: 26px;
      color:#3efefe;
    text-transform: uppercase;
    font-weight: bold;
    font-family: montserrat;
    }
    .sub-side-heading,.sub-side-heading span{
      color:#3fefef;
      font-family: Gilroy-Medium;
      font-size: 31px;
      font-style: normal;
      font-weight: 700;
      line-height: 37px;
    }
    .sub-side-heading span{
      color:white;
    }
    .sub-details{
      display: flex;
      justify-content: flex-start;
      flex-direction: column;
    }
    .sub-details b{
      font-size:18px;
      font-weight: 400;
    }
    @media(max-width:580px){
      .flex-div{
        flex-direction: column;
      }
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