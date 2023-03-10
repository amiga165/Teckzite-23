<?php
include "repeats/header.php";
?>



            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total outers</p>
                                <h6 class="mb-0">

                                <?php
                                include "db_config.php";
                                // Connect to database
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());

                                }
                    
                                // SQL query to retrieve data
                                $sql = "SELECT * FROM HMS";
                                $result = mysqli_query($conn, $sql);
                                $sum=0;
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) {
                                        $sum += 1;}}
                                        echo $sum;

                                ?>







                                </h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Registrations</p>
                                <h6 class="mb-0">
                                <?php
                                // Connect to database
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());

                                }
                    
                                // SQL query to retrieve data
                                $sql = "SELECT * FROM Registrations";
                                $result = mysqli_query($conn, $sql);
                                $sum=0;
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) {
                                        $sum += 1;}}
                                        echo $sum;

                                ?>




                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">
                                <?php
                                // Connect to database
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);
                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());

                                }
                    
                                // SQL query to retrieve data
                                $sql = "SELECT * FROM Registrations";
                                $result = mysqli_query($conn, $sql);
                                $sum=0;
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) {
                                        $sum += $row["Paid"];}}
                                        echo "Rs  ".$sum;

                                ?>

                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            



            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">TZ-ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Collage	</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Distric	</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Phone-no</th>
                                    <th scope="col">Paid</th>
                                    <th scope="col">clg-id</th>
                                    <th scope="col">Proof</th>
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
                    
                                // SQL query to retrieve data
                                $sql = "SELECT * FROM Registrations";
                                $result = mysqli_query($conn, $sql);
                    
                                // Loop through the result set and display data in table format
                                $sum=0;
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row["Id"] . "</td>";
                                        echo "<td>" . $row["First_name"] . "</td>";
                                        echo "<td>" . $row["Last_name"] . "</td>";
                                        echo "<td>" . $row["Collage"] . "</td>";
                                        echo "<td>" . $row["Year"] . "</td>";
                                        echo "<td>" . $row["Email"] . "</td>";
                                        echo "<td>" . $row["Gender"] . "</td>";
                                        echo "<td>" . $row["City"] . "</td>";
                                        echo "<td>" . $row["District"] . "</td>";
                                        echo "<td>" . $row["State"] . "</td>";
                                        echo "<td>" . $row["Phone_no"] . "</td>";
                                        echo "<td>" . $row["Paid"] . "</td>";
                                        echo "<td>" . $row["clgid"] . "</td>";
                                         echo '<td><img src="../uploads/'.$row["id_card_photo"].'" alt="hello" width="100px" height="100px"></td>';

                                        $sum += $row["Paid"]; //total amount
                                        
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
            <!-- Recent Sales End -->


        



            <?php
include "repeats/footer.php";
?>


     

</body>
<script>
    const preloader = document.querySelector('#preloader');
    const zoomPart = document.querySelector('.box-type-thing')
 
    if (preloader){
      window.addEventListener('DOMContentLoaded', () => {
         zoomPart.classList.add('zoom');
         setTimeout(function(){
             $(".preloader-container").fadeOut(2000);
         },3000);
      })}
     </script>
      <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>

</html>