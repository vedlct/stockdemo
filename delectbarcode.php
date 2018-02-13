<?php
session_start();
include ('connection.php');
extract($_GET);
extract($_POST);
echo $sql="DELETE FROM `productinfo` WHERE `id`=$id";
$result=mysqli_query($con,$sql);
?>