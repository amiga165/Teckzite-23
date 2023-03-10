
<?php
include "db_config.php";

session_start();
if (!isset($_SESSION["hms_admin_id"])) {
    header("Location: hms-login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
      <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- data entry  for check in Up Start -->
        
        <div class="container-fluid">
            
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <form action="Hms-singout.php" method="post">
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4"  name="checkin_time">Logout</button>
                <br><br><br>
                </form>
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23</h3>
                            </a>
                            <h3>HMS</h3>
                        </div>
                        <form action="HMS-code.php" method='post'>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="TZ2k233_" name="tzid" required  >
                            <label for="floatingText">UserId</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Block" name="block"  value="I3/k2" required disabled>
                            <label for="floatingInput">






                            </label>
</div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4"  name="checkin_time">Checkin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    
           
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   <!-- Table Start -->
           
   <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Boys</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">TZ-ID</th>
                                    <th scope="col">Block</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Checkin</th>
                                    <th scope="col">Checkout</th>
                                </tr>
                            </thead>
</tbody>
                 
                            <?php
                                                 // Connect to database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data for i3-Left-wing block
$sql = "SELECT * FROM HMS WHERE Block='i3-Left-wing'";
$result = mysqli_query($conn, $sql);

// Loop through the result set and display data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["Tzid"] . "</td>";
        echo "<td>" . $row["Block"] . "</td>";
        echo "<td>" . $row["Room"] . "</td>";
        echo "<td>" . $row["checkin"] . "</td>";
        echo "<td>" . $row["checkout"] . "</td>";

        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Close database connection
mysqli_close($conn);          ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table End -->



            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Girls</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example2">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">TZ-ID</th>
                                    <th scope="col">Block</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Checkin</th>
                                    <th scope="col">Checkout</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                                                                               // Connect to database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data for i3-Left-wing block
$sql = "SELECT * FROM HMS WHERE Block='i3-Right-wing'";
$result = mysqli_query($conn, $sql);

// Loop through the result set and display data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["Tzid"] . "</td>";
        echo "<td>" . $row["Block"] . "</td>";
        echo "<td>" . $row["Room"] . "</td>";
        echo "<td>" . $row["checkin"] . "</td>";
        echo "<td>" . $row["checkout"] . "</td>";

        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Close database connection
mysqli_close($conn);
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table End -->
            <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
<script>$(document).ready(function () {
    $('#example2').DataTable();
});</script>
    <!-- data entry  for check in Up Start -->
    <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23 checkout</h3>
                            </a>
                            <h3>HMS</h3>
                        </div>
                        <form action="HMS-code-checkout.php" method='post'>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="TZ2k233_" name="tzid" required  >
                            <label for="floatingText">UserId</label>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="checkout_time" >Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
</body>

</html>