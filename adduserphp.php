<?php
session_start();
include ('connection.php');
    extract($_POST);
    extract($_GET);
    $sql="INSERT INTO `login`(`username`, `password`, `type`) VALUES ('$username','$password','$type')";
    $result=mysqli_query($con,$sql);

?>
<script>
    window.location="adduser.php"
</script>
