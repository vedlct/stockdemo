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
                            <h5>CSV Export Form</h5>
                            <section>
                                <div class="content">

                                    <div class="row">
                                        <div id="drpdwn"  class="input-field col s2">
                                            <label >File Type</label> <br><br>
                                            <select id="status" name="status" onchange="">
                                                <option value="">Select File Type</option>
                                                <option value="offerfile">Offer File</option>
                                                <option value="productfile">Product File</option></select>
                                        </div>
                                        <div class="col m12">
                                            <div class="row">

                                                <form method="post" action="csv-explore.php">
                                                    Data Base field Name :
                                                    <input type="checkbox" name="check[]" value="category" >Category &nbsp;
                                                    <input type="checkbox" name="check[]" value="style">Style &nbsp;
                                                    <input type="checkbox" name="check[]" value="sku" >SKU &nbsp;
                                                    <input type="checkbox" name="check[]" value="productName">Name &nbsp;
                                                    <input type="checkbox" name="check[]" value="productDecription" >Description &nbsp;
                                                    <input type="checkbox" name="check[]" value="brand">Brand &nbsp;
                                                    <input type="checkbox" name="check[]" value="color" >Color &nbsp;
                                                    <input type="checkbox" name="check[]" value="size">Size &nbsp;<br><br><br>


                                                    <div class="input-field col s4">
                                                        <label style="font-size: 0.8rem;-webkit-transform: translateY(-180%);transform: translateY(-180%);">File Name </label>
                                                        <input name="filename" type="text" required placeholder="Type File Name Here">
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <input class="waves-effect waves-light btn red"  type="submit" name="save" value="Make CSV"></input>
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                        <div class="col m6">
                                            <h3>Generated CSV File</h3>
                                            <table>
                                                <thead>
                                                <tr style="color: #00aba9">
                                                    <td>SL.</td>
                                                    <td>File Name</td>
                                                    <td>Create Date</td>
                                                    <td>Action</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sl=1;
                                                $sqlcsv = mysqli_query($con,"SELECT * FROM `csvfile`");
                                                while ($file=mysqli_fetch_assoc($sqlcsv)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $sl ?></td>
                                                        <td><?php echo $file['name'].".csv" ?></td>
                                                        <td><?php echo $file['createtime'] ?></td>
                                                        <td><a href="<?php echo $file['filelocation'] ?>" download>download</a></td>
                                                    </tr>
                                                    <?php
                                                    $sl++;
                                                }
                                                ?>
                                                </tbody>
                                            </table>
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