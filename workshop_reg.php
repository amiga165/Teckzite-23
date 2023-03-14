<!DOCTYPE html>
<html lang="en">
   <head>
   <?php 
include "repeats/metatags.php";

?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Teckzite | Workshop Registration</title>
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
        Register
    </text>
  </svg>
    <div class="register-box mb-4">
      <form action="workshop-code.php" method='post' class="row">
        <p class="blink" style="font-size:23px;">Registering For <?php echo $_GET['workname']; ?> Workshop</p>
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
              <input type="text" name="college" id="collage" required>
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
            <label for="Email">Email</label>
              <input type="email" name='email' required>
              <i></i>
          </div>
          <div class="my-2 col-12 col-sm-6 d-flex"  style="flex-direction:column;justify-content:flex-start;">
            <label for="select-box"> Select Workshop</label>
            <select name="workshop" style="border:none;background:transparent;margin-top:2px;width: 85%;color:white">
              <option value="<?php echo $_GET['workname'] ?>"><?php echo $_GET['workname'] ?></option>
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

          <div id="event-error"></div>
          
          
          <input type="submit" id="pay-btn" onclick="continueWithPay()" value="Next" name="workshopcheck" id="register" class="text-center" style="margin:auto;margin-top:20px;margin-bottom:5px;width:30%;padding:5px 10px;background-color:#3fefef;border-radius:10px">
          
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
    
    <script>
        const submitBtn = document.getElementById('pay-btn');
        const errorMessage = document.getElementById('event-error');
        submitBtn.addEventListener('click',function(e){
          const errorCount = validateForm();
          if(errorCount === 1){
            e.preventDefault();
          }
        });
        function validateForm(){
          const mobileNumber = document.getElementById('phno').value;
          var error = 0;
          if(mobileNumber.length != 10){
             errorMessage.innerHTML = `Please Enter a Valid Phone Number`;
          }
          else{
            errorMessage.innerHTML = ``;
            const Modal = new bootstrap.Modal(document.getElementById('register-confirmation'));
            Modal.show();
          }
        }
    </script>
  

</main>


<!-- Footer -->
<?php 
include "repeats/footer.php"
?>



<!-- Footer -->

    <style>
            #event-error{
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