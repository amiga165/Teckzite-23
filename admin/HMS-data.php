<?php
include "repeats/header.php";
?>




       


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
mysqli_close($conn);

                                                ?>
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
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php
include "repeats/footer.php";
?>


    <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
<script>$(document).ready(function () {
    $('#example2').DataTable();
});</script>
</body>

</html>