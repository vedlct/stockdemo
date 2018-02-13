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



    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img style="width: 80%;" src="assets/images/dummmylogo.png" class="circle" alt="" >
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
                <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Product List:</a></li>
                <li class="no-padding">
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Input Form</a>

                </li>

                <li class="no-padding">
                    <a  href="csv-explore.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Historic uploaded files</a>

                </li>


                <li class="no-padding">
                    <a href="stock.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>homepage</a>

                </li>
                <li class="no-padding">
                    <a href="category.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Settings</a>

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
    <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">

                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                <span class="card-title">Product List</span>

                                    <section>
                                        <div class="wizard-content">
                                            <div class="row">
                                                <div class="col m12">
                                                    <div class="row">
                                                       <form method="post" action="category.php">
                                                        <div class="input-field col s4">
                                                            <input  name="name" type="text"  required  placeholder="Category or color or size">
                                                        </div>
                                                        <div class="input-field col s4">
                                                            <select name="list"  required >
                                                                <option value="" selected disabled>Select One</option>
                                                                <option value="Category">Category</option>
                                                                <option value="Color">Color</option>
                                                                <option value="Size">Size</option>
                                                            </select>
                                                        </div>


                                                        <div class="input-field col s4">
                                                            <input class="waves-effect waves-light btn red"  type="submit" name="submit" value="Submit"></input>
                                                        </div>
                                                       </form>
                                                    </div>

                                                </div>
                                                <?php
                                                include ('connection.php');
                                                if (isset($_POST['submit']))
                                                {
                                                    extract($_POST);
                                                    if ($list=="Category")
                                                    {
                                                        $sql = mysqli_query($con,"INSERT INTO `category`( `name`) VALUES ('$name')");
                                                    }
                                                    else if ($list=="Color")
                                                    {
                                                        $sql = mysqli_query($con,"INSERT INTO `color`(`colorName`) VALUES ('$name')");
                                                    }
                                                    else
                                                    {
                                                        $sql = mysqli_query($con,"INSERT INTO `size`(`name`) VALUES ('$name')");
                                                    }

                                                    if($sql)
                                                    {
                                                        echo "<script type=\"text/javascript\">
                                                            alert(\"Data Added Successfully\");
                                                            window.location=\"category.php\";
                                                            </script>";
                                                    }
                                                }
                                                ?>

                                                <div class="col m4">
                                                    <div class="row">
                                                        <span class="card-title">Category</span>
                                                         <table class="responsive-table bordered">
                                                             <tr>
                                                                 <td>SL.</td>
                                                                 <td>Name</td>
                                                             </tr>
                                                             <?php
                                                             $sl=1;
                                                             $sql2 = mysqli_query($con,"SELECT * FROM `category`");
                                                             while ($data1=mysqli_fetch_assoc($sql2)) {
                                                                 ?>
                                                                 <tr>
                                                                     <td><?php echo $sl?></td>
                                                                     <td><?php echo $data1['name']?></td>
                                                                 </tr>
                                                             <?php
                                                                 $sl++;
                                                             }
                                                             ?>
                                                         </table>
                                                    </div>
                                                </div>

                                                <div class="col m4">
                                                    <div class="row">
                                                        <span class="card-title">Color</span>
                                                        <table class="responsive-table bordered">
                                                            <tr>
                                                                <td>SL.</td>
                                                                <td>Name</td>
                                                            </tr>
                                                            <?php
                                                            $sl=1;
                                                            $sql3 = mysqli_query($con,"SELECT * FROM `color`");
                                                            while ($data2=mysqli_fetch_assoc($sql3)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $sl?></td>
                                                                    <td><?php echo $data2['colorName']?></td>
                                                                </tr>
                                                                <?php
                                                                $sl++;
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col m4">
                                                    <div class="row">
                                                        <span class="card-title">Size</span>
                                                        <table class="responsive-table bordered">
                                                            <tr>
                                                                <td>SL.</td>
                                                                <td>Name</td>
                                                            </tr>
                                                            <?php
                                                            $sl=1;
                                                            $sql4 = mysqli_query($con,"SELECT * FROM `size`");
                                                            while ($data3=mysqli_fetch_assoc($sql4)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $sl?></td>
                                                                    <td><?php echo $data3['name']?></td>
                                                                </tr>
                                                                <?php
                                                                $sl++;
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
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







<?php include ('js.php') ?>


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