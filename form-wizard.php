<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
if ( $_SESSION['user'] == Null){

}else{
include ('connection.php')?>

<head>

    <?php include ('head.php') ?>
</head>
<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="red darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <span class="chapter-title">Demo Company</span>

                </div>




            </div>
        </nav>
    </header>



    <?php include ('menu.php') ?>
    <main class="mn-inner">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <div>
                                <h5>Add Product Information</h5>
                                <section>
                                    <div class="wizard-content">
                                        <div class="row">
                                            <div class="col m12">
                                                <div class="row">
                                                    <form action="form-wizard.php" enctype="multipart/form-data" method="post">
                                                        <?php
                                                        include ('connection.php');
                                                        $sql1= mysqli_query($con,"SELECT * FROM `category`");
                                                        $sql2= mysqli_query($con,"SELECT * FROM `standardcolor`");

                                                        $sql3= mysqli_query($con,"SELECT * FROM `size`");
                                                        $sql4= mysqli_query($con,"SELECT * FROM `detailedcolor`");
                                                        ?>
                                                    <div class="input-field col s6">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Product Category</label>
                                                        <select name="category" required>
                                                            <option selected disabled value="">Select One</option>
                                                            <?php
                                                            while ($data1=mysqli_fetch_assoc($sql1))
                                                            {
                                                                echo "<option value=".$data1['name'].">".$data1['name']."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                        <div class="input-field col s6">
                                                            <label >Product Name</label>
                                                            <input  name="pname" type="text" class="required validate" required>

                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label >Brand name</label>
                                                            <input  name="brand" type="text" class="required validate" required>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label >Style</label>
                                                            <input  name="style" type="text" class="required validate" required>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label >SKU</label>
                                                            <input  name="sku" type="text" class="required validate" required>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Size</label>
                                                            <select name="size" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <?php
                                                                while ($data3=mysqli_fetch_assoc($sql3))
                                                                {
                                                                    echo "<option value=".$data3['name'].">".$data3['name']."</option>";
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>


                                                    <div class="input-field col s6">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Standard Color</label>
                                                        <select name="standardColor" required>
                                                            <option selected disabled value="">Select One</option>
                                                            <?php
                                                            while ($data2=mysqli_fetch_assoc($sql2))
                                                            {
                                                                echo "<option value=".$data2['colorName'].">".$data2['colorName']."</option>";
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Detailed Color</label>
                                                            <select name="detailedColor" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <?php
                                                                while ($data4=mysqli_fetch_assoc($sql4))
                                                                {
                                                                    echo "<option value=".$data4['colorName'].">".$data4['colorName']."</option>";
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Status</label>
                                                            <select name="status" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <option   value="Active">Active</option>
                                                                <option   value="Inactive">Inactive</option>

                                                            </select>

                                                        </div>

                                                    <div class="input-field col s12">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Product description</label>
                                                            <textarea name="pdes" id="ckeditor" class="ckeditor" style="overflow: hidden; height: 300px; border: 1px solid #ddd; margin-top: 10px;" required>

                                                        </textarea>
                                                    </div>
                                                    <div style="margin-top: 15px" class="col s12">
                                                    <div  class="input-field col s6">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Swatch</label>



                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic1" value="upload Image" accept="image/*">
                                                    </div>
                                                    </div>
                                                    <div   class="input-field col s6">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Main Image</label>



                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic2"  value="upload Image" accept="image/*">
                                                    </div>
                                                    </div>
                                                    </div>
                                                <div style="margin-top: 15px" class="col s12">
                                                <div  class="input-field col s6">
                                                    <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Outfit</label>



                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic3" value="upload Image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div   class="input-field col s6">
                                                    <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Image 2</label>



                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic4"  value="upload Image" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>


                                                    <div style="margin-top: 40px" class="input-field col s12">
                                                        <input class="waves-effect waves-light btn red"  type="submit" name="save" value="Submit"></input>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>

                                            <?php
                                            if (isset($_POST['save']))
                                            {
                                                $target_dir = "assets/images/productImage/";
                                                $swatch=$_FILES["pic1"]["name"];
                                                $mainImage=$_FILES["pic2"]["name"];
                                                $outfit=$_FILES["pic3"]["name"];
                                                $image2=$_FILES["pic4"]["name"];

//                                                move_uploaded_file($swatch,$target_dir) ;
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






                                                extract($_POST);
                                                $pdes = mysqli_real_escape_string($con,$pdes);
                                                //echo "INSERT INTO `productinfo`(`category`, `style`, `sku`, `productName`, `productDecription`, `brand`, `color`, `size`) VALUES ('$category','$style','$sku','$pname','$pdes','$brand','$color','$size')";
                                               $sql = mysqli_query($con,"INSERT INTO `productinfo`(`category`, `style`, `sku`, `productName`, `productDecription`, `brand`, `standardcolor`,`detailedcolor`, `size`,`swatch`,`mainImage`,`outfit`,`image2`,`status`) VALUES ('$category','$style','$sku','$pname','$pdes','$brand','$standardColor','$detailedColor','$size','$swatch','$mainImage','$outfit','$image2','$status')");

                                                if($sql)
                                                {
                                                    echo "<script type=\"text/javascript\">
                                                            alert(\"Data Added Successfully\");
                                                            window.location=\"form-wizard.php\";
                                                            </script>";
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </section>



                            </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="page-footer">
        <div class="footer-grid container">
            <div class="footer-l white">&nbsp;</div>
            <div class="footer-grid-l white">
            </div>
            <div class="footer-r white">&nbsp;</div>

        </div>
    </div>
</div>







<!-- Javascripts -->
<?php include ('js.php') ?>

<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>



<!--<script>-->
<!---->
<!--    $(function() {-->
<!---->
<!--        var pgurl = window.location.href.-->
<!--        substr(window.location.href.lastIndexOf("/")+1);-->
<!---->
<!--        $(".menu li").each(function(){-->
<!---->
<!--            if(pgurl==''){-->
<!--                $(".nav li:eq(1)").addClass("active");-->
<!--            }else-->
<!--            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')-->
<!--                $(this).addClass("active");-->
<!--        })-->
<!--    });-->
<!--</script>-->
</body>


</html>

<?php } ?>