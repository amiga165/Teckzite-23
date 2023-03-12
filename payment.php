<?php
if(isset($_GET['pay']))
{
    $details=$_GET['pay'];
    header("Location:payment-successful.php?payment=$details");
}
?>