<?php
session_start();
include ('connection.php');

    extract($_POST);
    extract($_GET);
    $sql="INSERT INTO `barcode`( `header`, `line1`, `line2`, `line3`, `line4`, `line5`, `pcs`, `po`, `item`,`lastvalue`) VALUES ('$header','$line1','$line2','$line3','$line4','$line5','$pcs','$po','$item','001')";
    $result=mysqli_query($con,$sql);




?>
<script>
    alert('Data Inserted Successfully');
    window.location = "home.php";
</script>
