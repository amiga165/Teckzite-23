
<?php
include "repeats/header.php";

if (!isset($_SESSION["admin_id"])) {
    // If user is not logged in, redirect to login page
    header("Location: login.html");
    exit;
}
if(isset($_GET['al']))
{
    $album=$_GET['al'];
    ?>
    <script>alert("<?php echo $album ?>")</script>
    <?php
}

?>
        <!-- Sign Up Start -->   <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Teckzite 2k23</h3>
                            </a>
                            <h3>Album Upload</h3>
                        </div>
                        <form action="album-code.php" method='post' enctype='multipart/form-data' >
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Heading" name="heading"  required>
                            <label for="floatingText">Heading</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date"  id="password" class="form-control" id="floatingInput" name="date" placeholder="date" required >
                            <label for="floatingInput" >Date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea placeholder="MSG"  name="message" class="vk" rows="4" cols="40" id="floatingText" required> </textarea>
                            <label for="floatingInput" > Message </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="link" name="link" required >
                            <label for="floatingText">Link</label>
                        </div>

                        <div class="form-floating mb-3">
                        <input type="file" name="Image" class="form-control"  id="floatingText" placeholder="Image" accept=".png,.jpeg,.jpg" required>
                            <label for="floatingText">Image</label>
                        </div>


                        <div class="d-flex align-items-center justify-content-between mb-4">
                        
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="album">submit</button>

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
?><script>
// get the file input element
var fileInput = document.querySelector('input[type=file]');

// set the maximum file size in bytes
var maxSize = 4000000; // 4mb

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






