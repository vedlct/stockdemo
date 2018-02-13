<?php
session_start();
include ('connection.php');
extract($_POST);
extract($_GET);


$sql="select * from login where password='$password' AND username='$username'";
$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);
if ($rows == 1) {
    $_SESSION['user'] = $username;

    ?>
<script>
    window.location="home.php";
</script>
<?php
}else {
    ?>
    <script>
        alert("Wrong username or Password");
        window.location="index.php"
    </script>
    <?php
}
    ?>