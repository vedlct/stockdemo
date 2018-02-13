<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('connection.php');
extract($_GET);
extract($_POST);
?>

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
                    <span class="chapter-title">Afra Group</span>

                </div>




            </div>
        </nav>
    </header>



    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="assets/images/afra.png" class="circle" alt="" >
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
                        <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>
            <ul id="menu" class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding "><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Product List:</a></li>
                <li class="no-padding " >
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>New Barcode</a>

                </li>
                <li class="no-padding">
                    <a href="adduser.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Add New User</a>

                </li>

            </ul>
            <div class="footer">
                <p class="copyright">Tech Cloud Ltd. ©</p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
            </div>
        </div>
    </aside>
    <main class="mn-inner">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <form id="example-form" action="editbarcodephp.php?id=<?php echo $id?>" method="post">
                            <div>
                                <h5>New Barcode</h5>
                                <section>
                                    <div class="wizard-content">
                                        <div class="row">
                                            <div class="col m6">
                                                <div class="row">

                                                    <?php
                                                    $sql="select * from barcode WHERE `id`=$id";
                                                    $result=mysqli_query($con,$sql);
                                                    while ($row=mysqli_fetch_array($result)){
                                                    ?>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Header</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" id="header" name="header" type="text" class="required validate" value="<?php echo $row['header']?>"  ">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Line 1</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="line1" type="text" class="required validate" value="<?php echo $row['line1']?>">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Line 2</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="line2" type="text" class="required validate" value="<?php echo $row['line2']?>">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Line 3</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="line3" type="text" class="required validate" value="<?php echo $row['line3']?>">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);" >Line 4</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="line4" type="text" class="required validate" value="<?php echo $row['line4']?>">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col m6">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Line 5</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="line5" type="text" class="required validate" value="<?php echo $row['line5']?>">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">PO</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="po" type="text" class="required validate" value="<?php echo $row['po']?>">
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Item</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="item" type="text" class="required validate" value="<?php echo $row['item']?>">
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">PCs</label>
                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="pcs" type="text" class="required validate" value="<?php echo $row['pcs']?>">
                                                    </div>

<!--                                                    <div class="input-field col s12">-->
<!--                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-140%);transform: translateY(-140%);">Last Barcode Value</label>-->
<!--                                                        <input style="border-bottom: 1px solid #4CAF50;box-shadow: 0 1px 0 0 #4CAF50" name="lastvalue" type="text" class="required validate" value="--><?php //echo $row['lastvalue']?><!--">-->
<!--                                                    </div>-->


                                                    <div class="input-field col s12">
                                                        <input class="waves-effect waves-light btn red" type="submit"
                                                               value="Submit"></input>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </section>



                            </div>
                        </form>
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


<script>

    $(document).ready(function(){
        $('#header').click();
    });
</script>




<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<!--<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>-->
<!--<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>-->
<!--<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>-->
<!--<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>-->
<!--<script src="assets/plugins/chart.js/chart.min.js"></script>-->
<!--<script src="assets/plugins/flot/jquery.flot.min.js"></script>-->
<!--<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>-->
<!--<script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>-->
<!--<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>-->
<!--<script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>-->
<!--<script src="assets/plugins/curvedlines/curvedLines.js"></script>-->
<!--<script src="assets/plugins/peity/jquery.peity.min.js"></script>-->
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>



<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="assets/js/pages/form-wizard.js"></script>



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

