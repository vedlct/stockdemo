<?php
include ('connection.php');
if (isset($_POST['save']))
{
    $swatch=$_FILES["pic1"]["name"];
    $mainImage=$_FILES["pic2"]["name"];
    $outfit=$_FILES["pic3"]["name"];
    $image2=$_FILES["pic4"]["name"];

    $target_dir = "assets/images/productImage/";

//    move_uploaded_file($swatch,$target_dir) ;
//    $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
//    $target_file = $target_dir . basename($_FILES["pic2"]["name"]);
//    $target_file = $target_dir . basename($_FILES["pic3"]["name"]);
//    $target_file = $target_dir . basename($_FILES["pic4"]["name"]);

    extract($_GET);
    extract($_POST);
    $pdes = mysqli_real_escape_string($con,$pdes);

    if ($swatch != null) {
        move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_dir . $swatch);
        $sql = mysqli_query($con,"UPDATE `productinfo` SET `swatch`='$swatch' WHERE `id`='$id'");
    }
    if ($mainImage !=null){
        move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_dir . $mainImage);
        $sql = mysqli_query($con,"UPDATE `productinfo` SET `mainImage`='$mainImage' WHERE `id`='$id'");
    }
    if ($outfit !=null){
        move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_dir . $outfit);
        $sql = mysqli_query($con,"UPDATE `productinfo` SET `outfit`='$outfit' WHERE `id`='$id'");
    }
    if ($image2 !=null){
        move_uploaded_file($_FILES["pic4"]["tmp_name"], $target_dir . $image2);
        $sql = mysqli_query($con,"UPDATE `productinfo` SET `image2`='$image2' WHERE `id`='$id'");
    }

    //echo "INSERT INTO `productinfo`(`category`, `style`, `sku`, `productName`, `productDecription`, `brand`, `color`, `size`) VALUES ('$category','$style','$sku','$pname','$pdes','$brand','$color','$size')";
    $sql = mysqli_query($con,"UPDATE `productinfo` SET `category`='$category',`style`='$style',`sku`='$sku',`productName`='$pname',`productDecription`='$pdes',`brand`='$brand',`standardcolor`='$standardColor',`detailedcolor`='$detailedColor',`size`='$size',`status`='$status' WHERE `id`='$id'");

    if($sql)
    {
        echo "<script type=\"text/javascript\">
                                                            alert(\"Data Updated Successfully\");
                                                            window.location=\"home.php\";
                                                            </script>";
    }else{
        echo mysqli_error($con);
    }
}
?>