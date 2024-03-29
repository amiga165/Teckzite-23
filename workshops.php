<!DOCTYPE html>
<html lang="en">
  
  <head>

  <title>Teckzite | Workshops</title>
  <?php 
include "repeats/metatags.php";
if(isset($_GET['wrksuccess'])){
  $wrkshop=$_GET['wrksuccess'];
 ?>
 <script>alert("<?php echo $wrkshop ?>")</script>
 <?php

}
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stars.css">
  <link rel="stylesheet" href="assets/css/sub.css">
  <style>
    /* ---------------------------------ARUN------------------------------------ */
    #bin{
      /* box-shadow: 0 0 15px 5px cyan; */
      border: 2px solid transparent;
    background: linear-gradient(71deg, #080509, #1a171c, #080509);
    background-clip: padding-box;
    border-radius: 15px;
    }
    #register{
      cursor: pointer;
    }
    .btn-success{
      background:#3efefe;
      color:black;
    }
    /* ---------------------------------ARUN------------------------------------ */


  </style>
<style>

    .modal-title.sure{
           font-family: myFirstFont;
           font-size: 24px;
           text-transform: uppercase;
           font-weight: 700;
           margin-bottom: 10px;
           }
   .modal-body .event-info{
           color:white;
           font-size: 18px;
           font-weight: 250;
   }
   .flex-div{
       display: flex;
       justify-content: space-between;
       }
   .flex-div>*{
       margin-top: 5px;
       display: flex;
       flex-direction: column;
       align-items: flex-start;
       justify-content: flex-start;
       height: fit-content;
   }
   .sub-side-heading{
       color:#3fefef;
       font-family: Gilroy-Medium;
       font-size: 25px;
       font-style: normal;
       font-weight: 700;
       line-height: 37px;
   }
   .sub-sub-side-heading{
       padding-left: 20px;
       color:#3fefef;
       font-family: Gilroy-Medium;
       font-size: 25px;
       font-style: normal;
       font-weight: 600;
       line-height: 34px;
   }
   .sub-flex{
       display: flex;
       flex-direction: column;
       padding-left: 40px;
   }
   .one-line-imp{
       font-size: 16px;
       color:#3efefe;
       text-transform: uppercase;
       font-weight: bold;
       font-family: montserrat;
       padding-left: 20px;
   }
   .one-line-imp span{
       color:white;
   }
   @media(max-width:600px){
       .flex-div{
           flex-direction: column;
       }
   }
    .id-error{
        color:red;
        text-align:center;
        margin-top:10px;
    }
</style>

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
      <img src="assets/img/earth1.png" class="img-fluid earth1">
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
<style>
  .bg-section img.earth1{
      transform:translate(-50%,-50%) scale(1.4);
  }
  @media (max-width:600px){
    .bg-section{
      overflow:hidden;
    } 
  }
</style>

  <!-- End Header Section -->
  <!-- ======= Hero Section ======= -->
    <div class="main-event-frame mb-5">
       

        <style>
            .event-flex{
              display:flex;
              justify-content:space-around;
              align-items:center;
              flex-wrap:wrap;
            }
          </style>
    
        <div class="tab-content events-container container">
          <div class="tab-pane container active">
            <div class="event-flex">
          <?php    
              include "db_config.php";
              $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
              if ($conn) {
                  //echo "connected..!!";
              }
              $q = "SELECT * FROM workshops";
              $q1 = mysqli_query($conn,$q);
              $num=1;
              while($row = mysqli_fetch_assoc($q1)){
          ?>
          <!---------------------------------------------------------------------------------------------------------------------->
          <div class="boxy <?php echo $row['branch']; ?> ">
            <div class="event-card" style="z-index: 2;">
              <div class="overlay"></div>
              <img src="workshops/<?php echo $row['photo']; ?>">
              <div class="workshop-register-btn">
              <?php 
                     $nice=$row['wrk_name'];
                  ?>
                  <a href="workshop_reg.php?workname=<?= $nice ?>"><button class="eid register event-register">Register</button>   </a>
              </div>
              <div class="event-details">
                <div class="event-title w-100"> <?php echo $row['wrk_name']; ?>  </div>
                <div class="small-details">
                  <div class="small-details-sub1">
                    <?php echo $row['wrk_info']; ?>
                  </div>
                </div>
                <div class="event-btns">
                  <button class="<?php echo $row['id']; ?> viewmore event-view-more btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#open-view-more<?php echo $num;?>">View More</button>
                </div>
              </div>
            </div>
            </div>
                  <!-- View More Modal -->
                  <div class="modal fade " id="open-view-more<?php echo $num;?>">
                    <div class="modal-dialog modal-dialog-centered" style="max-width:800px">
                    <div class="modal-content" style="background-color:black;">
                    <div class="modal-header" style="border-bottom:none">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:white;margin-bottom:10px"></button>
                      </div>
                        <div class="modal-body">
                        <h5  style="font-size:31px;font-weight:bold;padding:10px;color:#3efefe;"><?php echo $row['wrk_name']; ?></h5>
                        <div class="event-info">  <?php echo $row['wrk_des']; ?>  </div>
                        <div class="flex-div mt-3">
                            <div class="flex-first-half">
                            <div class="event-structure">
                                <div class="sub-side-heading">Venue and Time</div>
                                <?php
                                  echo $row['venue_time'];
                                  ?>
                                  <div class="sub-side-heading">Duration</div>
                                    <?php echo $row['duration']; ?>
                                    <div class="sub-side-heading">Amount</div>
                                    <?php echo $row['amaount']; ?>
                            </div>
                            </div>
                            <div class="flex-second-half">
                                <div class="event-timeline">
                                    <div class="sub-side-heading">Contact</div>
                                    <?php
                                      $cont=$row['ph_no'];
                                      $cont_arr=explode(",",$cont);
                                      foreach($cont_arr as $value) {
                                        echo $value . "<br/>";
                                    }
                                    ?>
                                </div>
                                <div class="event-prizes">
                                    
                                </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div style="font-style:bold;font-weight:bold;color:white;text-align:center;font-size:20px;font-style:italic;">Certificates Will Be Provided</div>
                                                    </div>
                                                    </div>
                                </div>
                <!-- View More Modal -->
          <?php $num++;} ?> 
                              </div>
  </div>
                              </div>
</div>
</div>
</div>
<style>
              .overlay{
                position:absolute;
                z-index:3;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color:rgba(63, 239, 239,0.3);
              }
              .event-card img{
                z-index:1;
              }
              .event-card:hover img{
                filter: blur(2px);
              }
              .event-card .workshop-register-btn{
                position: absolute;
                top:-40px;
                left: 50%;    
                transform:translateX(-50%);
                transition:top 0.5s ease;
              }
                .event-card .workshop-register-btn button{
                  background:rgba(0,0,0,0.4);
                  font-weight:800;
                  color:white;
                  padding: 5px 25px;
                  border:1px solid white;
                  border-radius:0.25em;
                }
                .event-card .workshop-register-btn button:hover{
                  background:#3fefef;
                  color:black;
                }
              .event-details{
                height: 90px;
                z-index:4;
              }
               .event-title{
                 text-align:center;
                 text-transform:capitalize;
               }
               .small-details{
                width: 100%;
               }
               .small-details-sub1{
                text-align:center;
                width: 100%;
               }
               .event-btns{
                 display: flex;
                 justify-content:center;
               }
               .event-card:hover .workshop-register-btn{
                top:30px;
                z-index:4;
               }
            </style>
<!-- ----------------------REGISTER POPUP------------------------- -->
<div id="register" style="display:none;height:100vh;width:100vw;position:fixed;top:0;left:0;z-index:100;justify-content:center;align-items:center;backdrop-filter: blur(20px);
    background-color: rgba(0,0,0,0.2);">
  <div id="bin" style="max-height:60vh;width:70vh;overflow-y:scroll;padding:20px;">
    <div class="h" style="display:flex;flex-direction:row;">
      
      <h5 id="eveDepartment" class="py-3 text-center" style="width:95%;">Department</h5>
      <div class="closeme" style="color:red;text-align:right;font-size:2em;">&times;</div>
    </div>
    <h1 id="eveName" class="text-center" style="color:orangered"></h1>
    <h5 id="eveTeamSize" ></h5>
    <div id="tz_ids">
    </div>
    
  </div>
</div>
<!-- ----------------------REGISTER POPUP------------------------- -->
<script>
  // ----------------------------------------------------CARDS
  $(document).ready(function(){
    var eveID, eveName, eveDepartment, maxTeam;

    // $("#reg_submit").click(function(){
    //   $.ajax({
    //     url : "event-code.php",
    //     type : "post",
    //     data : {event_id:eveID,tsize:maxTeam,branch:eveDepartment},
    //     success:function(response){
    //       alert("success");
    //     }
    //   });
    // });


    // $(".closeme").click(function(){
    //   $("#register").hide();
    // });
    /*$("#viewmore").click(function(){$(this).css("display","none");});*/
  });
  // ----------------------------------------------------CARDS
  
</script>



<?php
include "repeats/footer.php"
?>
<style>
  footer{
    position:relative;
  }
</style>
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