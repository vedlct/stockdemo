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
                                                             <tr style="color: #00aba9">
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
                                                            <tr style="color: #00aba9">
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
                                                            <tr style="color: #00aba9">
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