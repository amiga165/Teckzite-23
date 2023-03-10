<!DOCTYPE html>
<html lang="en">
   <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home</title>
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
  <link href="assets/css/register.css" rel="stylesheet">
  


</head>

<body>
<div class="side-nav">
    <div class="close-btn">
        <i class="bi bi-x navbar-icon"></i>
    </div>
    <ul class="side-nav-list">
        <li class="side-nav-list-items"><a href="about.html" class="side-nav-link">About</a></li>
        <li class="side-nav-list-items"><a href="events.html" class="side-nav-link">Events</a></li>
        <li class="side-nav-list-items"><a href="workshops.html" class="side-nav-link">Workshops</a></li>
        <li class="side-nav-list-items"><a href="contact.html" class="side-nav-link">Contact</a></li>
        <!-- <li class="side-nav-list-items"><a href="login.html" class="side-nav-link">Log In</a></li> -->
        <li class="side-nav-list-items"><a href="reguister.html" class="side-nav-link">Register</a></li>
        <li class="side-nav-list-items"><a href="reguister.html" class="side-nav-link">Register</a></li>
    </ul>
</div>
<nav class="header">
  <div class="svg-line"><img src="assets/img/large-screen-hl.svg"></div>
  <div class="hl">
      <div class="sub-elements d-block d-lg-none mx-auto pf"><i class="bi bi-person-circle"></i></div>
      <ul class="header-left-part d-none d-lg-flex">
              <li class="sub-elements"><a href="about.html">About</a></li>
              <li class="sub-elements"><a href="events.html">Events</a></li>
              <li class="sub-elements"><a href="workshops.html">Workshops</a></li>
      </ul>
  </div>
  <div class="header-img">
      <img src="assets/img/main-logo.png">
  </div>
  <div class="hr">
      <div class="sub-elements d-block d-lg-none mx-auto"><i class="bi bi-filter-right navbar-icon"></i></div>
      <ul class="header-right-part d-none d-lg-flex">
          <li class="sub-elements"><a href="contact.html">contact</a></li>
          <li class="sub-elements"><a href="login.html">Log In</a></li>
          <li class="sub-elements"><a href="register.html" class="active">Register</a></li>
      </ul>
  </div>
</nav>

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
        Register
    </text>
  </svg>
    <div class="register-box mb-4">
      <form action="workshop-code.php" method='post' class="row">
          <div class="my-2 col-12 col-sm-6 d-flex" style="flex-direction:column;justify-content:flex-start">
              <label for="username">First Name</label>
              <input type="text" name="firstname" id="username" required>
              <i></i>
          </div>
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="collage-id">Last Name</label>
              <input type="text" id="collage-id" name="lastname" required>
              <i></i>
          </div>
         
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="collage">Collage</label>
              <input type="text" name="collage" id="collage" required>
              <i></i>
          </div>
    
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label>Gender</label>
              <div style="display:flex;justify-content:flex-start;align-items:center;">
                  <div style="margin-right:20px">
                  <input type="radio" name="gender" value="Male" required id="male">
                  <label for="male">Male</label>

                  </div>
                  <div style="margin-right:20px">
                    <input type="radio" name="gender" id="female"  value="Female"required>
                    <label for="female" style="margin-left:-15px,padding-left:5px">Female</label>
                  </div> 
                  <div>
                    <input type="radio" name="gender" id="others"  value="Others"required>
                    <label for="others" style="margin-left:15px"> Others</label>
                  </div>
              </div>
          </div>
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="">Email</label>
              <input type="email" name='email' required>
              <i></i>
          </div>
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="select-box"> Select WOrkshop</label>
              <select id="select-box" name="workshop"style="background: transparent;border: none;color: white;font-size: 18px;width: 85%;">
                <option value="option-1" >CSE</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
                <option value="option-1">option-1</option>
              </select>
              <style>
                option{   
                  backdrop-filter: blur(10px);
                  background-color: rgba(0,0,0,1);
                  border: 2px solid rgba(0,0,0,0.1);
                  box-shadow: 0 0 40px rgb(8 7 16 / 60%);
                }
                #select-box:active{
                  border:none;
                }
              </style>
              <i></i>
          </div>
        
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="phno">Mobile Number</label>
              <input type="text" name="phno" id="phno" required>
              <i></i>
          </div>
      
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start">
            <label for="clg-id">ID Number / College Roll NO</label>
              <input type="text" name="cid" id="clg-id" required>
              <i></i>
          </div>

          <div id="password-match-error"></div>
          
          
          <input type="submit" id="pay-btn" onclick="continueWithPay()" value="Next" id="register" class="text-center" style="margin-top:20px;margin-bottom:5px;">
          <br>
          <div class="already-txt my-2 text-center">Already have an Account <a href="login.html" style="color:#3efefe">Login Here</a></div>
      </form>
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


<!-- Footer -->
<footer style="position:relative">
  <!-- <div class="footer-line"><img src="assets/img/footer-fl.svg"></div> -->
   <div class="footer-middle-part">
    <a href="#">About</a><a href="#">Terms & Conditions</a>
   </div>
   <div class="footer-left-part">
    <p>&copy; 2023 Teczite, RGUKT-NUZVID</p>
 </div>
   <div class="footer-right-part">
      <div class="social-media">
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
      </div>
   </div>
</footer>


<!-- Footer -->

<script>
      const password = document.getElementById('password');
      const confirmPassword = document.getElementById('c-password');

      const passwordMatchError = document.getElementById('password-match-error');

      const submitBtn = document.getElementById('register');

      submitBtn.addEventListener('click',function(e){
        errorCount = validateForm();
        if(errorCount == 1){
          e.preventDefault(); 
        }
      });
    
    function validateForm(){
      if(password.value !== confirmPassword.value){
        passwordMatchError.innerHTML = 'Passwords are not matching'
        var error = 1;
      }
      else{
        passwordMatchError.innerHTML = ''
        var error = 0;
      }
      return error;
    }

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
<script>
  function submitForm() {
  // Get form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var workshop = document.getElementById("select-box").value;

  // Format data for display
  var formData = "Name: " + name + "\nEmail: " + email + "\nPhone: " + phone + "\nWorkshop: " + workshop;

  // Display data in JS formatter
  document.getElementById("output").innerHTML = "<pre>" + formData + "</pre>";

  // Show "Continue with Pay" button
  document.getElementById("pay-btn").style.display = "block";
}</script>

</body>

</html>