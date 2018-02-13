<?php
session_start();
include ('connection.php');
extract($_GET);
extract($_POST);
$sql="UPDATE `barcode` SET`header`='$header',`line1`='$line1',`line2`='$line2',`line3`='$line3',`line4`='$line4',`line5`='$line5',`pcs`='$pcs',`po`='$po',`item`='$item' WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

?>
<script>

    alert("Data Update");
    window.location="home.php";
</script>
