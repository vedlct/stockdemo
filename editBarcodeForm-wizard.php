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
                            <h5>Edit Barcode</h5>
                            <section>
                                <div class="wizard-content">
                                    <div class="row">
                                        <div class="col m12">
                                            <div class="row">
                                                <form enctype="multipart/form-data" method="post">
                                                    <?php
                                                    include ('connection.php');
                                                    extract($_GET);
                                                    $sql = mysqli_query($con,"SELECT * FROM `productinfo` WHERE `id` = '$id'");
                                                    $sql1= mysqli_query($con,"SELECT * FROM `category`");
                                                    $sql2= mysqli_query($con,"SELECT * FROM `standardcolor`");
                                                    $sql4= mysqli_query($con,"SELECT * FROM `detailedcolor`");
                                                    $sql3= mysqli_query($con,"SELECT * FROM `size`");
                                                    while ($row=mysqli_fetch_assoc($sql)) {
                                                        ?>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Product Category</label>
                                                            <select name="category" required>
                                                                <option selected disabled value="">Select One
                                                                </option>
                                                                <?php
                                                                while ($data1 = mysqli_fetch_assoc($sql1)) {
                                                                    ?>
                                                                    <option value="<?php echo $data1['name']; ?>"
                                                                            <?php if ($data1['name'] == $row['category']){ ?>selected<?php } else {
                                                                    } ?>><?php echo $data1['name']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Product Name</label>
                                                            <input name="pname" type="text" value="<?php echo $row['productName']; ?>" class="required validate" required>

                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Brand Name</label>
                                                            <input name="brand" type="text" value="<?php echo $row['brand']; ?>" class="required validate" required>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Style</label>
                                                            <input name="style" type="text" value="<?php echo $row['style']; ?>" class="required validate" required>
                                                        </div>


                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">SKU</label>
                                                            <input name="sku" type="text" value="<?php echo $row['sku']; ?>" class="required validate" required>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Size</label>
                                                            <select name="size" required>
                                                                <option selected disabled value="">Select One
                                                                </option>
                                                                <?php
                                                                while ($data3 = mysqli_fetch_assoc($sql3)) {
                                                                    ?>
                                                                    <option value="<?php echo $data3['name']; ?>" <?php if ($data3['name'] == $row['size']){ ?>selected<?php } else {} ?>><?php echo $data3['name']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>


                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Standard Color</label>
                                                            <select name="standardColor" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <?php
                                                                while ($data2 = mysqli_fetch_assoc($sql2)) {
                                                                    ?>
                                                                    <option value="<?php echo $data2['colorName']; ?>"
                                                                            <?php if ($data2['colorName'] == $row['standardcolor']){ ?>selected<?php } else {} ?>><?php echo $data2['colorName']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>

                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Detailed Color</label>
                                                            <select name="detailedColor" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <?php
                                                                while ($data4 = mysqli_fetch_assoc($sql4)) {
                                                                    ?>
                                                                    <option value="<?php echo $data4['colorName']; ?>"
                                                                            <?php if ($data4['colorName'] == $row['detailedcolor']){ ?>selected<?php } else {} ?>><?php echo $data4['colorName']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>

                                                        <div class="input-field col s6">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Status</label>
                                                            <select name="status" required>
                                                                <option selected disabled value="">Select One</option>
                                                                <option  <?php if ($row['status'] == "Active"){ echo 'selected = "selected"';}?> value="Active">Active</option>
                                                                <option  <?php if ($row['status'] == "Inactive"){ echo 'selected = "selected"';}?>  value="Inactive">Inactive</option>

                                                            </select>

                                                        </div>

                                                        <div class="input-field col s12">
                                                            <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Product
                                                                description</label>
                                                            <textarea name="pdes" id="ckeditor" class="ckeditor"
                                                                      style="overflow: hidden; height: 300px; border: 1px solid #ddd; margin-top: 10px;"
                                                                      required>
                                                                <?php echo $row['productDecription']; ?>
                                                        </textarea>
                                                        </div>
                                                        <div style="margin-top: 15px" class="col s12">
                                                            <div  class="input-field col s6">
                                                                <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Swatch</label>
                                                                <img src="assets/images/productImage/<?php echo $row['swatch']?>" alt="Swatch" height="110px">


                                                                <div class="input-field col s12">
                                                                    <input type="file" name="pic1" value="upload Image" accept="image/*">
                                                                </div>
                                                            </div>
                                                            <div   class="input-field col s6">
                                                                <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Main Image</label>
                                                                <img src="assets/images/productImage/<?php echo $row['mainImage']?>" alt="Main Image" height="110px">


                                                                <div class="input-field col s12">
                                                                    <input type="file" name="pic2"  value="upload Image" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-top: 15px" class="col s12">
                                                            <div  class="input-field col s6">
                                                                <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Outfit</label>
                                                                <img src="assets/images/productImage/<?php echo $row['outfit']?>" alt="Outfit" height="110px">


                                                                <div class="input-field col s12">
                                                                    <input type="file" name="pic3" value="upload Image" accept="image/*">
                                                                </div>
                                                            </div>
                                                            <div   class="input-field col s6">
                                                                <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Image 2</label>
                                                                <img src="assets/images/productImage/<?php echo $row['image2']?>" alt="Image2" height="110px">


                                                                <div class="input-field col s12">
                                                                    <input type="file" name="pic4"  value="upload Image" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <div style="margin-top: 40px" class="input-field col s12">
                                                        <input  formaction="updateBarcode.php?id=<?php echo $id ?>" class="waves-effect waves-light btn red"  type="submit" name="save" value="Submit"></input>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

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

<script>
    $(function() {
        var pgurl = window.location.href.
        substr(window.location.href.lastIndexOf("/")+1);
        $(".menu li").each(function(){
            if(pgurl==''){
                $(".nav li:eq(1)").addClass("active");
            }else
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>

</body>


</html>

<?php } ?>