<html>
  <head>
  <?php 
    include "repeats/metatags.php"
  ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>

    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
        justify-content:center;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
        .details{
          color:red;
          font-size:25px;
          font-weight:bold;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        text-align:center;
        justify-content:center;
        
      }
      .cbody{
        border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;
      }
      .but{
        margin-top:5%;
        border-radius:5px;
        background-color:green;
        font-family:italic;
        font-weight:bold;
        color:white;
        font-size:20px;
        border:none;
        width:300px;
        height:50px;

      }
      @media only screen and (max-width:576px) {
        
        .card{
          width:fit-content;
        }
        
      }
    </style>

    <body>
      <div class="card">
      <div class="cbody">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p class="details"><?php 
        if(isset($_GET['payment']))
        {
          $detail=$_GET['payment'];
          $detail_arr=explode(",",$detail);
          foreach($detail_arr as $value) {
            echo $value . "<br/>";
        }
        }
         ?></p><p> we'll be in touch shortly!</p>
        <a href="index.php"><button class="but">Ok</button></a>
      </div>
    </body>
</html>
