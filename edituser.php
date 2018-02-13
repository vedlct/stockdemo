<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ( $_SESSION['user'] == Null){

}else{
include ('connection.php');
?>

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
                        <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>
            <ul  class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Product List:</a></li>
                <li class="no-padding">
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>New Barcode</a>

                </li>
                <li class="no-padding">
                    <a  href="adduser.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Add New User</a>

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
                <p class="copyright">Tech Cloud Ltd. ©</p>
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

                            <span class="card-title">Barcode</span>
                            <table class="responsive-table bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Header</th>
                                    <th>Line1</th>
                                    <th>Line2</th>
                                    <th>PO</th>
                                    <th>Item</th>
                                    <th>Pcs</th>
                                    <th>Last Sl Number</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                                </thead>
                                <?php
                                $count=1;
                                $sql="select * from barcode";
                                $result=mysqli_query($con,$sql);
                                while ($row=mysqli_fetch_array($result)){
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $count?></td>
                                        <td><?php echo $row['header']?></td>
                                        <td><?php echo$row['line1']?></td>
                                        <td><?php echo $row['line2']?></td>
                                        <td><?php echo $row['po']?></td>
                                        <td><?php echo$row['item']?></td>
                                        <td style="text-align: center"><?php echo$row['pcs']?></td>
                                        <td style="text-align: center"><?php echo$row['lastvalue']?></td>
                                        <td><a href="editbarcode.php?id=<?php echo $row['id']?>"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                            <a href="delectbarcode?id=<?php echo $row['id']?>"> <i class="fa fa-trash-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                            <a href="printbarcode.php?id=<?php echo $row['id']?>"> <i class="fa fa-print" aria-hidden="true" style="color: red"></i></a>&nbsp;
                                        </td>
                                    </tr>
                                    </tbody>

                                    <?php $count=$count+1;}?>
                            </table>
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
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/curvedlines/curvedLines.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<!--<script>-->
<!---->
<!--    if(confirm("Are you sure you want to delete this?"))-->
<!--    {-->
<!--        window.location="delectbarcode.php?id="-->
<!---->
<!--    }-->
<!--</script>-->

<script>

    $(function() {

        var pgurl = window.location.href.
        substr(window.location.href.lastIndexOf("/")+1);

        $(".sidebar-menu li").each(function(){

            if(pgurl==''){
                $(".sidebar-menu li:eq(1)").addClass("active");
            }else
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>
</body>
</html>

<?php } ?>