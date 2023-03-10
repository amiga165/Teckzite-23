<!DOCTYPE html>
<html lang="en">
  
  <head>
  <?php 
include "repeats/metatags.php"
?>
  <title>Teckzite | Login</title>

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
  <link href="assets/css/login.css" rel="stylesheet">

</head>

<body>
<?php 
include "repeats/header.php"
?>
  <!-- End Header Section -->
  <!-- ======= Hero Section ======= -->
  <div class="background-container-events">
    <div class="parallax">
        <section class="wrapper">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </section>
    </div>
</div>

  
  <!-- End Header Section -->
  <!-- ======= Hero Section ======= -->
  <main id="main_container" style="min-height:100vh;" class="d-flex justify-content-center align-items-center">
   
  <div class="container">
    <div class="row" >
        
        <div class="col-lg-6 d-none d-lg-block " >
            
            <div class="scan">
                <div class="fingerprint"></div>
                    <h3>Scanning...</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center pt-4 " >
            <form action="login-verifi.php" method="post" class="my-auto black-form">
                <div class="form-anim-border">
                    <div class="form-banner">
                      <!-- <div class="form-heading mt-3 mb-3 text-effect" style="font-weight:bold;">Log in</div> -->
                      <svg class="side-heading" style="margin:0px;font-size:25px;">
                        <text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">
                            log in
                        </text>
                    </svg>
                    <div id="error-message" >
            <?php
if (isset($_GET['error'])) {
  $error_msg = $_GET['error'];
  echo "<p class='error' >$error_msg</p>";
}
?>
<style>
  .error{
    color:red;
  }
  </style>

          </div>
                      <div class="row">
                        <input type="text" class="form-data" name="email">
                        <span>Email</span>
                        <i></i>
                      </div>
                      <div class="row">
                        <input type="password" class="form-data" name="password">
                        <span>Password</span>
                         <i></i>
                      </div>
                      <div class="w-100 d-flex align-items-center" style="justify-content:space-between;flex-direction:column;" >
                           <button type="submit" class="log-btn m-3">log in</button>
                           <div class="m-3">
                              <p>Dont have an account? <a href="register.html" style="color:#3fefef;">Register here</a></p>
                           </div>
  
                      </div>
                    </div>
                  </div>
</form>
        </div>

    </div>
  </div>

</main>
<?php
include "repeats/footer.php"
?>

<!-- End footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
   
      <script src="assets/js/script.js"></script>
    <script>
      const errorDiv = document.getElementById('error-message');

if (errorDiv) {
  setTimeout(() => {
    errorDiv.style.display = 'none';
  }, 5000);
}
</script>


</body>

</html>