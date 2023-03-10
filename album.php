<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include "repeats/metatags.php"
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teckzite | Albums</title>




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


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-kp/1K/VYYXYtR45Th7g72KjzKk7seuHvX9m7nK04g/YJaG7fHw2zJMY7RtR5D7yJd60Ru1I7LzfvCZ5r5qF+5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{
        padding: 0;
        margin: 0;
        text-align:center;
        justify-content:center;
      }
      body{
        /* display: flex; */
        justify-content: center;
        align-items: center;
        text-align:center;
        background-color: black;
      }
      .content{
        text-align:center;
        margin:20px auto;
        width: 100%;
        max-width:800px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba( 0, 0, 0, 0.25 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 14px );
        -webkit-backdrop-filter: blur( 14px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
      }
      img{
        border-radius:10px;
        width:200px;
        height:200px;
        margin:10px;
      }
      .first{
        display:flex;
        justify-content:flex-start;
      }
      .second{
        display:flex;
        justify-content:flex-end;
      }
      .content .EventIMG{
        width:auto;
        /* min-width:200px ; */
        height: 100%;
        background-color: black;
      }
      .content .event-discription{
        width: 75%;
        max-width:550px ;
        height: 210px;
        background-color: black;
        display: flex;
        flex-direction: column;
      }
      .content .event-discription .event-title{
        color: aqua;
        font-size: 25px;
        margin: 5px 10px;
      }
      .content .event-discription .event-details{
        color: white;
        margin: 5px 10px;
      }
      .content .event-discription .event-btn{
        margin: 5px 10px;
        display: flex;
        justify-content: flex-end;
      }
      .content .event-discription .event-btn button{
        color: black;
        font-weight: 700;
        border: 1px solid black;
        font-size: 10px;
      }
      @media (max-width:768px){
        .content{
          margin: 30px 0px;
          display: flex;
          flex-wrap: wrap;
        }
        img{

        }
        .content .EventIMG{
          width: 100%;
        }
        .content .event-discription{
          width: 100%;
        }
        .content .event-discription .event-title{
          font-size: 20px;
        }
        .content .event-discription .event-details{
          font-size: 14px;
          padding: 0;
        }

      }
      @media (max-width:425px){
        body{
          min-height: auto;
        }
        .content .event-discription{
          height: auto;
        }
        .content .EventIMG{
          width: 100%;
        }
        .content .event-discription{
          width: 100%;
        }

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
    <?php
    include "db_config.php";
    $conn= mysqli_connect($db_host, $db_user, $db_password, $db_db);
    $sql="SELECT * FROM album";
    $res=mysqli_query($conn,$sql);
    if($res->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
          if($row['id'] % 2 != 0)
          {?>
            <div class="row content">
            <div class="col-lg-6 col-sm-12 col-xs-12 EventIMG first"><img src="album/<?= $row['image'] ?>" alt=""></div>
                    <div class=" col-lg-6 col-sm-12 col-xs-12 event-discription">
                        <div class="event-title"><?= $row['heading']." ".$row['eve_date'] ?></div>
                        <div class="event-details">
                            <?= $row['msg'] ?>
                        </div>
                        <div class="event-btn">
                            <button class="btn"><a href="<?= $row['link'] ?>" target="_blank">Read More</a></button>
                        </div>
                </div>
                
            </div>
          <?php
          }
          else{?>
            <div class="row content">
            
                    <div class=" col-lg-6 col-sm-12 col-xs-12 event-discription">
                        <div class="event-title"><?= $row['heading']." ".$row['eve_date'] ?></div>
                        <div class="event-details">
                            <?= $row['msg'] ?>
                        </div>
                        <div class="event-btn">
                            <button class="btn"><a href="<?= $row['link'] ?>" target="_blank">Read More</a></button>
                        </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 EventIMG second"><img src="uploads/<?= $row['image'] ?>" alt=""></div>
            </div>
       <?php
       }
        }
    }
    ?>
  
  <?php 
include "repeats/footer.php"
?>
</body>
</html>