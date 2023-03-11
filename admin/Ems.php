<?php
include "repeats/header.php";


if (!isset($_SESSION["admin_id"])) {
    // If user is not logged in, redirect to login page
    header("Location: login.html");
    exit;
}




?>






            <!-- Table Start -->
           
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">CSE</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 table table-striped" id="example">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">EVENT-ID</th>
                                    <th scope="col">TEAM-SIZE</th>
                                    <th scope="col">BRANCH</th>
                                    <th scope="col">TZid1</th>
                                    <th scope="col">TZid2</th>
                                    <th scope="col">TZid3</th>
                                    <th scope="col">TZid4</th>
                                    <th scope="col">TZid5</th>
                                    <th scope="col">TZid6</th>
                                    <th scope="col">TZid7</th>
                                    <th scope="col">TZid8</th>
                                    <th scope="col">TZid9</th>
                                    <th scope="col">TZid10</th>
                                    
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
$sql = "SELECT * FROM events_reg";
$result = mysqli_query($conn, $sql);

// Loop through the result set and display data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["event_id"] . "</td>";
        echo "<td>" . $row["teamsize"] . "</td>";
        echo "<td>" . $row["branch"] . "</td>";
        echo "<td>" . $row["tzid1"] . "</td>";
        echo "<td>" . $row["tzid2"] . "</td>";
        echo "<td>" . $row["tzid3"] . "</td>";
        echo "<td>" . $row["tzid4"] . "</td>";
        echo "<td>" . $row["tzid5"] . "</td>";
        echo "<td>" . $row["tzid6"] . "</td>";
        echo "<td>" . $row["tzid7"] . "</td>";
        echo "<td>" . $row["tzid8"] . "</td>";
        echo "<td>" . $row["tzid9"] . "</td>";
        echo "<td>" . $row["tzid10"] . "</td>";
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




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
include "repeats/footer.php";
?>


<script>

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );</script>

</body>

</html>