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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
  <!-- Template Main CSS File -->
</head>

<body>
<div class="pop-up-menu">
        <div class="pop-up">
            <div class="tick">
                <i class="bi bi-x-circle-fill"></i>
            </div>
            <div class="thank-note">
                Sorry!!
            </div>
            
                <?php

if (empty($error)) {
    // Data inserted successfully
    // ...

    // Registration status card HTML
    $status_card = '
        <div class="card">
            <div class="card-body registration-status">
                <h5 class="card-title">Registration Successful</h5>
                <p class="card-text">The following Techzite IDs have been registered for the event:</p>
                <ul>';

    // Loop through the submitted form data to extract the Techzite IDs
    for ($i = 1; $i <= $teamsize; $i++) {
        $tzid = $_POST['tzidNumber-' . $i];
        if (!empty($tzid)) {
            $status_card .= '<li>' . $tzid . '</li>'; // Add the TZID to the card
        }
    }

    
} else {
    // There were errors
    // ...

    // Registration status card HTML
    $status_card = '
        
            <div class="registration-status text-center">
                <h5 class="registration-stat">Registration Failed</h5>
                <p class="registration-info ">' . $error . '</p>
            </div>
        ';
}

echo $status_card; // Display the registration status card
?>  
              
           
            <div class="ok-btn-container"><a href="events.php"><button class="ok-btn pop-msg-btn">OK</button></a></div>
        </div>
    </div>
</body>
<style>
     .pop-up-menu.active{
        animation-name:fade;
        animation-duration: 2s;
        animation-timing-function: ease;
        animation-iteration-count: 1;   
    }
    @keyframes fade {
        0%{opacity:1}
        100%{opacity:0;display: none;}
    }
    .pop-up-menu{
        width: 100%;
        min-height: 100vh;
        border: none;
        background-color: black;
        opacity: 1;
        backdrop-filter:blur(20px);
    }
    .pop-up{
        position: absolute;
        left: 50%;
        top: 0%;
        opacity: 0;
        animation: moveDown 10000000000000000s ease 1;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 2px solid transparent;
        background: linear-gradient(71deg, #080509, #1a171c, #080509);
        background-clip: padding-box;
        border-radius: 25px;
        padding: 10px;
        transition:all 1s ease;
        opacity: 1;
    }
    @keyframes moveDown{
        0%{top:0%;opacity:0;}
        0.00000000000001%{top:50%;opacity:1}
    }
    .pop-up.active{
        top:0%;
        opacity: 0;
    }
    .tick i{
        font-size: 100px;
        color: red;
    }
    .tick{
        margin-top:-50px;
        width: 90px;
        height: 90px;
        border-radius:50%;
        margin-bottom: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: black;
    }
    .thank-note{
        color:white;
        font-size:32px;
        margin-bottom: 10px;
    }
    .registration-status{
        margin: 15px;
        padding: 5px;
        border-radius:10px; 
        border: 1px solid #ccc;
    }
    .registration-stat{
        color:white;
        font-size:25px;
        margin-bottom: 4px;
    }
    .registration-info{
        color:white;
        font-size: 16px;
    }
    .ok-btn-container{
        width: 80%;
        margin-bottom: 10px;
        display: flex;
        justify-content: center;
    }
    .ok-btn-container button{
        border:none;
        background-color:red;
        color:white;
        border-radius:5px;
        padding: 10px 100px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

   
</script>

</html>