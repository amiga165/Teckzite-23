<!DOCTYPE html>
<html lang="en">
   <head>
   <?php 
include "repeats/metatags.php"
?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Teckzite | Temp</title>
 

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
  <link href="assets/css/register.css" rel="stylesheet">
  


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
  

  <!-- End Header Section -->
  <!-- ======= Hero Section ======= -->
  
<!-- Name Mobile number , collage year , gender (radio)   , city district , state collage ID , Email password -->

<main id="main-container" style="margin-top:100px">
  <svg class="side-heading" style="margin-top:-10px">
    <text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">
        Highlights
    </text>
  </svg>
   

  <div style="font-size:30px;font-weight:bold;height:20vh;">
    <marquee>This page will be update soon</marquee>
  </div>
    <br>
    <br>
    <div  class="text-center">
      <div class="blink">If you are facing isuues contact us</div>
      <div style="font-weight:400;font-size:18px;"><text class="details" style="color:#3efefe;">Mobile:</text>&nbsp;&nbsp;9398848215</div>
      <div style="font-weight:400;font-size:18px;"><text class="details" style="color:#3efefe;" >Email :</text>&nbsp;&nbsp;codewithsidddhu@gmail.com</div>
      <!-- <p>Email :codewithsidddhu@gmail.com</p> -->
    </div>
    <br>
    <br>
</main>


<?php
include "repeats/footer.php"
?>
<style>
  footer{
    position:absolute;
  }
</style>
<script>
      const password = document.getElementById('password');
      const confirmPassword = document.getElementById('c-password');
      const emailInput = document.getElementById('email');
      const amount = document.getElementById('amount');

      const passwordMatchError = document.getElementById('password-match-error');

      const mobileNumberInput = document.getElementById('phno');

      const submitBtn = document.getElementById('register');

      submitBtn.addEventListener('click',function(e){
        errorCount = validateForm();
        console.log(emailInput.value.indexOf('@rguktn.ac.in'))
        if(errorCount == 1){
          e.preventDefault(); 
        }
        if (emailInput.value.indexOf('@rguktn.ac.in') === -1 && emailInput.value.indexOf('@rgukts.ac.in') === -1) {
          amount.value = 400;
        }
        else{
          amount.value = 250;
        }
        console.log(amount.value)
      });
    
    function validateForm(){
      if(mobileNumberInput.value.length != 10){
        passwordMatchError.innerHTML = 'Enter a Valid Mobile Number'
        var error = 1;
      }
      else if(password.value.length < 8){
        passwordMatchError.innerHTML = 'Passwords must contain atleast 8 characters'
        var error = 1;
      }
      else if(password.value.length > 20){
        passwordMatchError.innerHTML = 'Passwords should not exceed 20 characters'
        var error = 1;
      }
      else if(password.value !== confirmPassword.value){
        passwordMatchError.innerHTML = 'Passwords are not matching'
        var error = 1;
      }
      else{
        passwordMatchError.innerHTML = ''
        var error = 0;
      }
      return error;}

</script>

<script>
// get the file input element
var fileInput = document.querySelector('input[type=file]');

// set the maximum file size in bytes
var maxSize = 1000000; // 4mb

// listen for file selection
fileInput.addEventListener('change', function() {
  // get the file object
  var file = fileInput.files[0];
  
  // check if the file size exceeds the maximum size
  if (file.size > maxSize) {
    alert('File size exceeds the maximum allowed size of 1mb.');
    // reset the file input to clear the selection
    fileInput.value = '';
  }
});

</script>

    <style>
            #password-match-error{
              margin-top: 5px;
              color:rgb(200,40,40);
              text-align:center;
              font-size:18px;
              font-weight:700;
            }
    </style>
  <style>
            @media (max-width:425px){
              #terms{
                font-size:15px;
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