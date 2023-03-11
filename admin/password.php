
<?php
include "repeats/header.php";
?>

       

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23</h3>
                            </a>
                            <h3>Forgot Password</h3>
                        </div>
                        <form action="password-update.php" method='post' onsubmit="return validateForm()">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="TZ2k233_" name="tzid" >
                            <label for="floatingText">Teckziteid</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password"  id="password" class="form-control" id="floatingInput" placeholder="Block" >
                            <label for="floatingInput" >Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password"  id="confirm_password" class="form-control" id="floatingInput" placeholder="Block" name="password" >
                            <label for="floatingInput"> Re-enter Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" >Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php
include "repeats/footer.php";
?>


    <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
<script>$(document).ready(function () {
    $('#example2').DataTable();
});</script>
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
</body>

</html>










