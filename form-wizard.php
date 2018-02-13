<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
if ( $_SESSION['user'] == Null){

}else{
include ('connection.php')?>
<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2017 09:52:01 GMT -->
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



    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img style="width: 80%;" src="assets/images/dummmylogo.png" class="circle" alt="">
                    <br>
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <p>Admin<i class="material-icons right">arrow_drop_down</i></p>

                    </a>
                </div>

            </div>
            <div class="sidebar-account-settings">
                <ul>

                    <li class="divider"></li>
                    <li class="no-padding">
                        <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>
            <ul  class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Home</a></li>
                <li class="no-padding">
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Input Form</a>

                </li>

                <li class="no-padding">
                    <a  href="csv-explore.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>CSV Export</a>

                </li>


                <li class="no-padding">
                    <a href="stock.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Stock Summary</a>

                </li>
                <li class="no-padding">
                    <a href="category.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Category</a>

                </li>
                <!--<li class="no-padding">-->
                <!--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">star_border</i>Plugins<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>-->
                <!--<div class="collapsible-body">-->
                <!--<ul>-->
                <!--<li><a href="miscellaneous-sweetalert.html">Sweet Alert</a>-->
                <!--<li><a href="miscellaneous-code-editor.html">Code Editor</a>-->
                <!--<li><a href="miscellaneous-nestable.html">Nestable List</a>-->
                <!--<li><a href="miscellaneous-masonry.html">Masonry</a>-->
                <!--<li><a href="miscellaneous-idle-timer.html">Idle Timer</a>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="no-padding">-->
                <!--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">desktop_windows</i>Layouts<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>-->
                <!--<div class="collapsible-body">-->
                <!--<ul>-->
                <!--<li><a href="layout-blank.html">Blank Page</a></li>-->
                <!--<li><a href="layout-boxed.html">Boxed Layout</a></li>-->
                <!--<li><a href="layout-hidden-sidebar.html">Hidden Sidebar</a></li>-->
                <!--<li><a href="layout-right-sidebar.html">Right Sidebar</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="no-padding">-->
                <!--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Forms<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>-->
                <!--<div class="collapsible-body">-->
                <!--<ul>-->
                <!--<li><a href="form-elements.html">Form Elements</a></li>-->
                <!--<li><a href="form-wizard.html">Form Wizard</a></li>-->
                <!--<li><a href="form-upload.html">File Upload</a></li>-->
                <!--<li><a href="form-image-crop.html">Image Crop</a></li>-->
                <!--<li><a href="form-image-zoom.html">Image Zoom</a></li>-->
                <!--<li><a href="form-input-mask.html">Input Mask</a></li>-->
                <!--<li><a href="form-select2.html">Select2</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="no-padding">-->
                <!--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">grid_on</i>Tables<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>-->
                <!--<div class="collapsible-body">-->
                <!--<ul>-->
                <!--<li><a href="table-static.html">Static Tables</a></li>-->
                <!--<li><a href="table-responsive.html">Responsive Tables</a></li>-->
                <!--<li><a href="table-comparison.html">Comparison Table</a></li>-->
                <!--<li><a href="table-data.html">Data Tables</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="no-padding"><a class="waves-effect waves-grey" href="charts.html"><i class="material-icons">trending_up</i>Charts</a></li>-->
                <!--<li class="no-padding">-->
                <!--<a class="collapsible-header waves-effect waves-grey"><i class="material-icons">my_location</i>Maps<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>-->
                <!--<div class="collapsible-body">-->
                <!--<ul>-->
                <!--<li><a href="maps-google.html">Google Maps</a></li>-->
                <!--<li><a href="maps-vector.html">Vector Maps</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</li>-->
            </ul>
            <div class="footer">
                <p class="copyright">Demo Company ©</p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
            </div>
        </div>
    </aside>
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
                                                        <img src="assets/images/mountains2.jpg" alt="" height="110px">


                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic1" value="upload Image" accept="image/*">
                                                    </div>
                                                    </div>
                                                    <div   class="input-field col s6">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Main Image</label>
                                                        <img src="assets/images/mountains2.jpg" alt="" height="110px">


                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic2"  value="upload Image" accept="image/*">
                                                    </div>
                                                    </div>
                                                    </div>
                                                <div style="margin-top: 15px" class="col s12">
                                                <div  class="input-field col s6">
                                                    <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Outfit</label>
                                                    <img src="assets/images/mountains2.jpg" alt="" height="110px">


                                                    <div class="input-field col s12">
                                                        <input type="file" name="pic3" value="upload Image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div   class="input-field col s6">
                                                    <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">Image 2</label>
                                                    <img src="assets/images/mountains2.jpg" alt="" height="110px">


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

                                                $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
                                                $target_file = $target_dir . basename($_FILES["pic2"]["name"]);
                                                $target_file = $target_dir . basename($_FILES["pic3"]["name"]);
                                                $target_file = $target_dir . basename($_FILES["pic4"]["name"]);

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