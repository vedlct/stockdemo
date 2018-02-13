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



    <?php include ('menu.php') ?>
    <main class="mn-inner">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <div>
                            <section>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="ofer">
                                                <h5>Generate Offer File</h5>
                                                <?php
                                                $sql = "SELECT * FROM `category`";
                                                $result = $con->query($sql);
                                                ?>

                                                <div  class="input-field col s2">
                                                    <label >Category</label> <br>
                                                    <select id="category" name="category" onchange="category(this.value)">
                                                        <option value="">Select Category</option>
                                                        <?php
                                                        if ($result->num_rows > 0) {

                                                            while($row = $result->fetch_assoc()) {
                                                                echo '<option value="'.$row["name"].'">' . $row["name"].'</option>';
                                                            }
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;


                                                <?php
                                                $sql = "SELECT productName FROM `productinfo`";
                                                $result = $con->query($sql);
                                                $sql2 = "SELECT disstartdate FROM `offer`";
                                                $result2 = $con->query($sql2);
                                                $sql3 = "SELECT disenddate FROM `offer`";
                                                $resul3 = $con->query($sql3);
                                                ?>

                                                <div  class="input-field col s2">
                                                    <label >Product Status</label><br>
                                                    <select id="pname" name="pname" onchange="pname(this.value)">
                                                        <option value="">Select Product Status</option>
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>


                                                </div>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;

                                                <div  class="input-field col s2">
                                                    <label >Stock Status</label><br>
                                                    <select id="pname" name="pname" onchange="pname(this.value)">
                                                        <option value="">Select Stock Status</option>
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>

                                                </div>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;

                                                <div  class="input-field col s2">
                                                    <label >Category</label> <br>
                                                    <select id="category" name="category" onchange="category(this.value)">
                                                        <option value="">Select Start Date</option>
                                                        <?php
                                                        if ($result->num_rows > 0) {

                                                            while($row = $result->fetch_assoc()) {
                                                                echo '<option value="'.$row["disstartdate"].'">' . $row["disstartdate"].'</option>';
                                                            }
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;

                                                <div  class="input-field col s2">
                                                    <label >Category</label> <br>
                                                    <select id="category" name="category" onchange="category(this.value)">
                                                        <option value="">Select End Date</option>
                                                        <?php
                                                        if ($result->num_rows > 0) {

                                                            while($row = $result->fetch_assoc()) {
                                                                echo '<option value="'.$row["disenddate"].'">' . $row["disenddate"].'</option>';
                                                            }
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;

                                                <br>

                                                <table>
                                                    <thead>
                                                    <tr style="color: #00aba9">
                                                        <td>Select</td>
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
                                                            <td><input type="checkbox"></td>

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
                                                <br>
                                                <div class="col m3">
                                                <a href="insertofer.php" > <button class="waves-effect waves-light btn red"  >Creation #Full</button></a>
                                                    </div>
                                                <div class="col m3">
                                                <a href="#" > <button class="waves-effect waves-light btn red"  >Price Update</button></a>
                                                    </div>
                                                <div class="col m3">
                                                <a href="#" > <button class="waves-effect waves-light btn red"  >Stock Update</button></a>
                                                    </div>
                                                <div class="col m3">
                                                <a href="#" > <button class="waves-effect waves-light btn red"  >Markdown Update</button></a>

                                                </div>
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