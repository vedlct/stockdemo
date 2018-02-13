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
                <li class="no-padding">
                    <a href="stock.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>homapage</a>

                </li>
                <li class="no-padding "><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Product List</a></li>
                <li class="no-padding">
                    <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i> SKU Input</a>

                </li>

                <li class="no-padding active">
                    <a  href="csv-explore.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Historic uploaded files</a>

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
                            <h5>CSV Export Form</h5>
                            <section>
                                <div class="wizard-content">
                                    <div class="row">
                                        <div class="col m12">
<!--                                            <div class="row">-->
<!--                                                <form method="post" action="csv-explore.php">-->
<!--                                                    Data Base field Name :-->
<!--                                                    <input type="checkbox" name="check[]" value="category" >Category &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="style">Style &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="sku" >SKU &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="productName">Name &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="productDecription" >Description &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="brand">Brand &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="color" >Color &nbsp;-->
<!--                                                    <input type="checkbox" name="check[]" value="size">Size &nbsp;<br><br><br>-->
<!---->
<!---->
<!--                                                    <div class="input-field col s4">-->
<!--                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">File Name </label>-->
<!--                                                        <input name="filename" type="text" required placeholder="Type File Name Here">-->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="input-field col s12">-->
<!--                                                        <input class="waves-effect waves-light btn red"  type="submit" name="save" value="Make CSV"></input>-->
<!--                                                    </div>-->
<!--                                                </form>-->
<!--                                            </div>-->

                                            <div id="drpdwn"  class="input-field col s2">
                                                <label >File Type</label> <br><br>
                                                <select id="status" name="status" onchange="showhide()">
                                                    <option value="">Select File Type</option>
                                                    <option value="offerfile">Offer File</option>
                                                    <option value="productfile">Product File</option></select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="ofer">
                                            <h5>Offer File</h5>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td>SL.</td>
                                                        <td>Category</td>
                                                        <td>Sku</td>
                                                        <td>price</td>
                                                        <td>State</td>
                                                        <td>Quantity</td>
                                                        <td>Product-Id-Type</td>
                                                        <td>Discount Price</td>
                                                        <td>Discount Start Date</td>
                                                        <td>Discount End Date</td>
                                                        <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sl=1;
                                                        $sqlcsv = mysqli_query($con,"SELECT * FROM `offer`");
                                                        while ($file=mysqli_fetch_assoc($sqlcsv)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $sl ?></td>

                                                                <td><?php echo $file['category'] ?></td>
                                                                <td><?php echo $file['sku'] ?></td>
                                                                <td><?php echo $file['price'] ?></td>
                                                                <td><?php echo $file['state'] ?></td>

                                                                <td><?php echo $file['quanity'] ?></td>



                                                                <td><?php echo $file['productidtype'] ?></td>

                                                                <td><?php echo $file['disprice'] ?></td>
                                                                <td><?php echo $file['disstartdate'] ?></td>
                                                                <td><?php echo $file['disenddate'] ?></td>
                                                                <td><a href="#"> <i class="fa fa-pencil-square-o"
                                                                                                                                          aria-hidden="true"
                                                                                                                                          style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                                                    <a data-panel-id=">" id="myBtn2" > <i
                                                                                class="fa fa-trash-o" aria-hidden="true"
                                                                                style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                                                </td>


                                                            </tr>
                                                            <?php
                                                            $sl++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="insertofer.php" > <button class="waves-effect waves-light btn red"  >Create Offer</button></a>
                                            </div>
                                            <div id="product" style="display: none">
                                                <h5>Product File</h5>
                                                <table class="responsive-table bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th >Product Category</th>
                                                        <th>Style</th>
                                                        <th>SKU</th>
                                                        <th>Product name</th>
                                                        <th>Brand name</th>
                                                        <th>status</th>
                                                        <th>Last Exported By</th>
                                                        <th>Last Exported Date</th>
                                                        <th style="width: 100px">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    $sl = 1;
                                                    $sql1= mysqli_query($con,"SELECT * FROM `productinfo`");
                                                    while ($data=mysqli_fetch_assoc($sql1)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sl ?></td>
                                                            <td><?php echo $data['category'];?></td>
                                                            <td><?php echo $data['style'] ?></td>
                                                            <td><?php echo $data['sku'] ?></td>
                                                            <td><?php echo $data['productName'] ?></td>
                                                            <td><?php echo $data['brand'] ?></td>
                                                            <td ><?php echo $data['status'] ?></td>
                                                            <td><?php echo $data['LastExportedBy']; ?></td>
                                                            <td> <?php echo $data['LastExportedDate'];?></td>

                                                            <!--                                            <td style="text-align: center">-->
                                                            <?php //echo $sla;
                                                            ?><!--</td>-->
                                                            <td><a href="editBarcodeForm-wizard.php?id=<?php echo $data['id'] ?>"> <i class="fa fa-pencil-square-o"
                                                                                                                                      aria-hidden="true"
                                                                                                                                      style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                                                <a data-panel-id="<?php echo $data['id'];?>" id="myBtn2" onClick="deletedc(this)"> <i
                                                                            class="fa fa-trash-o" aria-hidden="true"
                                                                            style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sl++;
                                                    }
                                                    ?>

                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>
                                        <?php
                                        error_reporting(0);
                                        if (isset($_POST['save']))
                                        {
                                            extract($_POST);
                                            $table =null;
                                            for($i=0;$i<sizeof($check);$i++)
                                            {
                                                if ($table==null)
                                                {
                                                    $table=$check[$i];
                                                }
                                                else
                                                {
                                                    $table= $table.",".$check[$i];
                                                }

                                            }
                                            $fp = fopen("csv/$filename.csv", "w");

                                            $res = mysqli_query($con,"SELECT $table FROM `productinfo`");

                                            // fetch a row and write the column names out to the file
                                            $row = mysqli_fetch_assoc($res);
                                            $line = "";
                                            $comma = "";
                                            foreach($row as $name => $value) {
                                                $line .= $comma . '"' . str_replace('"', '""', $name) . '"';
                                                $comma = ",";
                                            }
                                            $line .= "\n";
                                            fputs($fp, $line);

                                            // remove the result pointer back to the start
                                            mysqli_data_seek($res, 0);

                                            // and loop through the actual data
                                            while($row = mysqli_fetch_assoc($res)) {

                                                $line = "";
                                                $comma = "";
                                                foreach($row as $value) {
                                                    $line .= $comma . '"' . str_replace('"', '""', $value) . '"';
                                                    $comma = ",";
                                                }
                                                $line .= "\n";
                                                fputs($fp, $line);



                                            fclose($fp);}
                                            $location="csv/$filename.csv";
                                            $filstore = mysqli_query($con,"INSERT INTO `csvfile`(`name`, `filelocation`) VALUES ('$filename','$location')");
                                            if($filstore)
                                            {
                                                echo "<script type=\"text/javascript\">
                                                            alert(\"Data Added Successfully\");
                                                            window.location=\"csv-explore.php\";
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

<script>
    function showhide(){
        var x  = document.getElementById("status").value;
        if (x == 'offerfile'){
            document.getElementById("product").style.display = "none";
            document.getElementById("ofer").style.display = "block";
        }else {
            document.getElementById("ofer").style.display = "none";
            document.getElementById("product").style.display = "block";
        }
    }
</script>

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