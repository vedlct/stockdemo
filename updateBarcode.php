<?php
include ('connection.php');
if (isset($_POST['save']))
{
    $swatch=$_FILES["pic1"]["name"];
    $mainImage=$_FILES["pic2"]["name"];
    $outfit=$_FILES["pic3"]["name"];
    $image2=$_FILES["pic4"]["name"];


    if ($swatch != null) {
        move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_dir . $swatch);
    }
    if ($mainImage !=null){
        move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_dir . $mainImage);
    }
    if ($outfit !=null){
        move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_dir . $outfit);
    }
    if ($image2 !=null){
        move_uploaded_file($_FILES["pic4"]["tmp_name"], $target_dir . $image2);
    }

    extract($_GET);

    extract($_POST);

    $pdes = mysqli_real_escape_string($con,$pdes);
    //echo "INSERT INTO `productinfo`(`category`, `style`, `sku`, `productName`, `productDecription`, `brand`, `color`, `size`) VALUES ('$category','$style','$sku','$pname','$pdes','$brand','$color','$size')";
    $sql = mysqli_query($con,"UPDATE `productinfo` SET `category`='$category',`style`='$style',`sku`='$sku',`productName`='$pname',`productDecription`='$pdes',`brand`='$brand',`standardcolor`='$standardColor',`detailedcolor`='$detailedColor',`size`='$size',`swatch`='$swatch',`mainImage`='$mainImage',`outfit`='$outfit',`image2`='$image2',`status`='$status' WHERE `id`='$id'");

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