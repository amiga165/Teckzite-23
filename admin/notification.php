<?php
include "repeats/header.php";
?>        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23</h3>
                            </a>
                            <h3>NOTIFICATIONS</h3>
                        </div>
                        <form action="notification-code.php" method='post' >
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="TZ2k233_" name="notification" required>
                            <label for="floatingText">TITLE</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date"  id="password" class="form-control" id="floatingInput" placeholder="Date" name="date" required>
                            <label for="floatingInput" >date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="TZ2k233_" name="elink" required>
                            <label for="floatingText">links</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea rows="10" cols="40"   id="confirm_password" class="vk" id="floatingInput" placeholder="Notification" name="message" required></textarea>
                            <label for="floatingInput">Message</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Send</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php
include "repeats/footer.php";
?>


    <script src="js/main.js"></script>
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










