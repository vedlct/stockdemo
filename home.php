<!DOCTYPE html>
<html lang="en">


    <head>

       <?php include ('head.php');
        include ('connection.php');
       ?>


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
                            <span class="chapter-title">Baker Leather</span>

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
                        <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Product List:</a></li>
                        <li class="no-padding">
                            <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>SKU Input</a>

                        </li>

                        <li class="no-padding">
                            <a  href="csv-explore.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>CSV Export</a>

                        </li>
                        

                        <li class="no-padding">
                            <a href="stock.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>homepage</a>

                        </li>
                        
                        <li class="no-padding">
                            <a href="category.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Settings</a>

                        </li>
                        

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
                                    <div>


                                    <span class="card-title">Product List</span>
                                    <div class="input-field col s2">
                                        <label >Search</label>
                                        <input  name="line2" type="text" class="required validate" onkeyup="search(this.value)">
                                    </div>
                                    </div>
                                    <div id="drpdwn"  class="input-field col s2">
                                        <label >Status</label> <br>
                                        <select id="status" name="status" onchange="status(this.value)">
                                            <option value="">--Select Status--</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option></select>
                                    </div>





                            <?php
                                    $sql = "SELECT * FROM `category`";
                                    $result = $con->query($sql);
                            ?>

                                    <div id="drpdwn" class="input-field col s2">
                                        <label >Category</label> <br>
                                        <select id="category" name="category" onchange="category(this.value)">
                                            <option value="">--Select Category--</option>
                                            <?php
                                            if ($result->num_rows > 0) {

                                                while($row = $result->fetch_assoc()) {
                                                    echo '<option value="'.$row["name"].'">' . $row["name"].'</option>';
                                                }
                                            }


                                            ?>
                                        </select>
                                    </div>


                                    <?php
                                    $sql = "SELECT productName FROM `productinfo`";
                                    $result = $con->query($sql);
                                    ?>

                                    <div id="drpdwn" class="input-field col s2">
                                        <label >Product Name</label><br>
                                        <select id="pname" name="pname" onchange="pname(this.value)">
                                            <option value="">--Select Product Name--</option>
                                            <?php
                                            if ($result->num_rows > 0) {

                                                while($row = $result->fetch_assoc()) {
                                                    echo '<option value="'.$row["productName"].'">' . $row["productName"].'</option>';
                                                }
                                            }


                                            ?>
                                        </select>


                                    </div>




                                    <div id="base1">
                                    <table class="responsive-table bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th >Product Category</th>
                                                <th>Style</th>
                                                <th>SKU</th>
                                                <th>Product name</th>
                                                <th >Product description</th>
                                                <th>Brand name</th>
                                                <th>Color</th>
                                                <th>Size</th>
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
                                                <td width="31%" style="padding: 5px;">
                                                    <?php echo $data['productDecription'] ?>
                                                </td>
                                                <td><?php echo $data['brand'] ?></td>
                                                <td><?php echo $data['standardcolor']; ?></td>
                                                <td> <?php echo $data['size'];?></td>


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

                                    <div id="base2" style="display: none">
                                        <div id="txtHint"></div>
                                    </div>
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
                                            function deletedc(x1) {

                                                if(confirm("Are you sure you want to delete this?"))
                                                {
                                                    btn2 = $(x1).data('panel-id');

                                                    $.ajax({
                                                        url:"delectbarcode.php",
                                                        method:"POST",
                                                        data:{id:btn2},
                                                        dataType:"text",
                                                        success:function(data){
                                                            alert(data);
                                                            window.location="home.php"
                                                        }
                                                    });


                                                }
                                            }
                                        </script>

                                        <script>
                                            function pname(str) {
                                                console.log(str);
                                                if (str.length==0)
                                                {
                                                    document.getElementById('base2').style.display = 'none'
                                                    document.getElementById("base1").style.display = 'block';
                                                }
                                                else {
                                                    document.getElementById('base1').style.display = 'none'
                                                    document.getElementById("base2").style.display = 'block';

                                                    if (str == "") {
                                                        document.getElementById("txtHint").innerHTML = "";
                                                        return;
                                                    } else {
                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.onreadystatechange = function () {
                                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                                            }
                                                        }

                                                        xmlhttp.open("GET", "getProductName.php?q=" + str);
                                                        xmlhttp.send();
                                                    }
                                                }

                                            }

                                            function status(str) {
                                                console.log(str);
                                                if (str.length==0)
                                                {
                                                    document.getElementById('base2').style.display = 'none'
                                                    document.getElementById("base1").style.display = 'block';
                                                }
                                                else {
                                                    document.getElementById('base1').style.display = 'none'
                                                    document.getElementById("base2").style.display = 'block';

                                                    if (str == "") {
                                                        document.getElementById("txtHint").innerHTML = "";
                                                        return;
                                                    } else {
                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.onreadystatechange = function () {
                                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                                            }
                                                        }

                                                        xmlhttp.open("GET", "getStatus.php?q=" + str);
                                                        xmlhttp.send();
                                                    }
                                                }


                                            }


                                            function category(str) {
                                                console.log(str);
                                                if (str.length==0)
                                                {
                                                    document.getElementById('base2').style.display = 'none'
                                                    document.getElementById("base1").style.display = 'block';
                                                }
                                                else {
                                                    document.getElementById('base1').style.display = 'none'
                                                    document.getElementById("base2").style.display = 'block';

                                                    if (str == "") {
                                                        document.getElementById("txtHint").innerHTML = "";
                                                        return;
                                                    } else {
                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.onreadystatechange = function () {
                                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                                            }
                                                        }

                                                        xmlhttp.open("GET", "getCategory.php?q=" + str);
                                                        xmlhttp.send();
                                                    }
                                                }

                                            }



                                            function search(str)
                                            {
                                                if (str.length==0)
                                                {
                                                    document.getElementById('base2').style.display = 'none'
                                                    document.getElementById("base1").style.display = 'block';
                                                }
                                                else {
                                                    document.getElementById('base1').style.display = 'none'
                                                    document.getElementById("base2").style.display = 'block';

                                                    if (str == "") {
                                                        document.getElementById("txtHint").innerHTML = "";
                                                        return;
                                                    } else {
                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.onreadystatechange = function () {
                                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                                            }
                                                        }

                                                        xmlhttp.open("GET", "getsearch.php?q=" + str);
                                                        xmlhttp.send();
                                                    }
                                                }

                                            }
                                        </script>
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

