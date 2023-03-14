<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Teckzite | Speakers</title>
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

  <link href="assets/css/stars.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/sss.css">
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
    <svg class="side-heading" style="padding-top:100px;">
        <text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">
            Speakers
        </text>
    </svg>

    <style>
         .swiper {
      width: 100%;
      padding-bottom: 50px;
      overflow: hidden;
      position: relative;
        }

        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 300px;
          height: 300px;    
        }

        .swiper-button-next,
      .swiper-button-prev {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background-color: transparent;
        color: #fff;
        text-align: center;
        font-size: 24px;
        line-height: 30px;
        cursor: pointer;
        z-index: 10;
      }

      .swiper-button-next {
        right: 10px;
      }

      .swiper-button-prev {
        left: 10px;
      }
        </style>

        <div class="speaker-containers">
          <style>
        .speaker-containers{
          width: 100%;
          overflow:hidden;
          min-height:calc(100vh - 300px)
      }
      @media (max-width:500px){
        .speaker-containers{
          width: 85%;
          overflow:hidden;
          margin-left: 15%;
        }
        .swiper-button-next {
          right: 30px;
        }
        .swiper-button-prev{
          left: -4px;
        }
      }

    </style>
        <div class="swiper mySwiper">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                    <img src="assests\harry1.webp">
                    <div class="content">
                      <div class="speakerName">Speaker Name</div>
                      <div class="aboutSpeaker">Co-Ordinator</div>
                    </div>
                  </div>
              </div>
              
            </div>
          </div>
        

          <style>
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
      border:1px solid white;
    }
    .card .content{
      width: 100%;
      height: 30%;
      position: absolute;
      left: 0;
      bottom: 0;
      background: rgba(13, 12, 12, 0.77);
      box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
      backdrop-filter: blur(20px);
      display: flex;
      flex-direction: column;
    }
    .card img{
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    .card .content .speakerName{
      font-family: arial;
      color: aqua;
      font-size:30px;
      padding: 3px 0px;
      text-align: center;
    }
    .card .content .aboutSpeaker{
      color: white;
      font-family: arial;
      text-align: center;
      margin-top: 5px;
    }
   
          </style>
       
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            initialSlide: 2,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
              rotate: 0,
              stretch: 0,
              depth: 300,
              modifier: 1,
              slideShadows: true,
            },
            pagination: {
              el: ".swiper-pagination",
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            },
        });
        </script>
        

    </div>


    <?php
include "repeats/footer.php"
?>
<style>
  footer{
    position:relative;
    margin-top: 40px;
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
</body>

</html>