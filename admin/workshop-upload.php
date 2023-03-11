<?php
include "repeats/header.php";

if (!isset($_SESSION["admin_id"])) {
    // If user is not logged in, redirect to login page
    header("Location: login.html");
    exit;
}
if(isset($_GET['work'])){
    $success = $_GET['work'];
    ?>
    <script> alert("<?php echo $success ?>")</script>
    <?php
}
if(isset($_GET['wkdel'])){
    $delete = $_GET['wkdel'];
    ?>
    <script> alert("<?php echo $delete ?>")</script>
    <?php
}

?>


<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23</h3>
                            </a>
                            <h3>Workshop Upload Form</h3>

                            </div>
                        <form action="workshop-upload-code.php" method='post' enctype="multipart/form-data" >
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="workshop name" name="wrkname"  required>
                            <label for="floatingText">workshop name</label>
                        </div>


                        <div class="form-floating mb-3">
                        
              <select id="floatingText" name="branch" class="form-control" required>
                <option value="cse">CSE</option>
                <option value="ece">ECE</option>
                <option value="civil">CIVIL</option>
                <option value="mech">MECH</option>
                <option value="mme">MME</option>
                <option value="eee">EEE</option>
                <option value="chem">CHEM</option>
                <option value="puc">PUC</option>
                <option value="forall">Open To All </option>
                <option value="robotics">robotics</option>
              </select>
              <label for="FloatingText" >Branch</label>
                        </div>


                        <div class="form-floating mb-3">
                            <textarea name="st-des" id="" cols="40" rows="3" class="vk" required></textarea >
                            <label for="floatingText">Short-des</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea name="des" id="" cols="40" rows="30" class="vk" required></textarea>
                            <label for="floatingText">Description</label>
                        </div>

               

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Amount"  name="amt"  required>
                            <label for="floatingText">Amount</label>
                        </div>



                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Heading" name="vt" required>
                            <label for="floatingText">Venue & Time</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Heading" name="Duration" required>
                            <label for="floatingText">Duration</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea name="ph_no" id="" cols="40" rows="12" class="vk" required></textarea>
                            <label for="floatingText">Phone number</label>
                        </div>


                        <div class="form-floating mb-3">
                        <input type="file" name="wimg" class="form-control"  id="floatingText" placeholder="Image" accept=".png,.jpeg,.jpg" required>
                            <label for="floatingText">Image</label>
                        </div>


                        <div class="d-flex align-items-center justify-content-between mb-4" >
                        
                        </div>
                        <button type="submit" name="wrkshop" class="btn btn-primary py-3 w-100 mb-4" >submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <form action="workshop-upload-code.php " class="text-center " method="POST">
  <label for="id">workshop id:</label>
  <input type="number" id="id" name="id" required>
  <br>
  <button type="submit" name="wrkdel">Delete workshop</button>
</form>




            <!-- Table Start -->
           
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">CSE</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example2">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">workshop id</th>
                                    <th scope="col">workshop name</th>
                                    <th scope="col">Branch</th>  
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


$sql = "SELECT * FROM workshops";
$result = mysqli_query($conn, $sql);
// Loop through the result set and display data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["wrk_name"] . "</td>";
        echo "<td>" . $row["branch"] . "</td>";
     
    }
} else {
    echo "0 results";
}

// Close database connection
mysqli_close($conn);

                                                ?>

</div>






<!--end table-->










        
        <!-- Sign Up End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</div></div>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

  
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>

$(document).ready(function() {
    $('#example3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );</script>
<script>
    function validateForm() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("confirm_password").value;
        if (pass1 != pass2) {
            alert("Passwords do not match");
            return false;
        }
        return true;
    }
</script>
<script>
// get the file input element
var fileInput = document.querySelector('input[type=file]');

// set the maximum file size in bytes
var maxSize = 4000000; // 500KB

// listen for file selection
fileInput.addEventListener('change', function() {
  // get the file object
  var file = fileInput.files[0];
  
  // check if the file size exceeds the maximum size
  if (file.size > maxSize) {
    alert('File size exceeds the maximum allowed size of 4mb.');
    // reset the file input to clear the selection
    fileInput.value = '';
  }
});</script>
    <!-----Delete the event ----->
          <!-- Table Start -->
           
          <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">CSE</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example3">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Workshop Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>  
                                    <th scope="col">College</th> 
                                    <th scope="col">GMail</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Roll No.</th>   
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


$sql = "SELECT * FROM workshops_reg";
$result = mysqli_query($conn, $sql);
// Loop through the result set and display data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["workshop"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phono"] . "</td>";
        echo "<td>" . $row["rollno"] . "</td>";

     
    }
} else {
    echo "0 results";
}

// Close database connection
mysqli_close($conn);

                                                ?>

</div>

<?php
include "repeats/footer.php";
?>
</body>
</html>