<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Title -->
    <title>Demo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->



</head>

<body>
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-teal lighten-1">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
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



    <?php include ('menu.php') ?>
        <main class="mn-inner inner-active-sidebar">
            <div class="middle-content">

                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l12">
                        <div class="card invoices-card">
                            <div class="card-content">

                                <span class="card-title">Stock</span>
                                <table border="1" >
                                    <tr style="color: #00aba9">
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th> Colour</th>
                                    <th>Size</th>
                                    <th>Price </th>
                                    <th>Stock</th>
                                    <th>Remaining Stock</th>
                                    <th>Action </th>
                                    </tr>
                                        <tbody>
                                        <tr>

                                            <td>Bordeaux low-back satin gown></td>
                                            <td>Womenswear>Gowns</td>
                                            <td>Bordeaux</td>
                                            <td>S</td>
                                            <td>350</td>
                                            <td>20</td>
                                            <td>12</td>
                                            <td> <a href="editBarcodeForm-wizard.php?id=2">Details</a> </td>
                                        </tr>
                                    <tr>

                                        <td>Bordeaux low-back satin gown></td>
                                        <td>Womenswear>Gowns</td>
                                        <td>Bordeaux</td>
                                        <td>M</td>
                                        <td>150</td>
                                        <td>10</td>
                                        <td>8</td>
                                        <td> <a href="editBarcodeForm-wizard.php?id=2">Details</a> </td>
                                    </tr>
                                    <tr>

                                        <td>Bordeaux low-back satin gown></td>
                                        <td>Womenswear>Gowns</td>
                                        <td>Bordeaux</td>
                                        <td>L</td>
                                        <td>50</td>
                                        <td>30</td>
                                        <td>15</td>
                                        <td> <a href="editBarcodeForm-wizard.php?id=2">Details</a> </td>
                                    </tr>
                                    </tbody>
<!--                                    <tbody style="border: 1px solid #ddd;">-->
<!--                                        <tr>-->
<!--                                            <td>-->
<!--                                                <table >-->
<!--                                                    <tbody>-->
<!--                                                        <tr >-->
<!--                                                            <td>T-shirt</td>-->
<!--                                                        </tr>-->
<!--                                                        <tr>-->
<!--                                                            <td>Saree</td>-->
<!--                                                        </tr>-->
<!--                                                    </tbody>-->
<!--                                                </table>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table >-->
<!--                                                    <tbody>-->
<!--                                                        <tr >-->
<!--                                                            <td>S</td>-->
<!--                                                        </tr>-->
<!--                                                        <tr>-->
<!--                                                            <td>M</td>-->
<!--                                                        </tr>-->
<!--                                                    </tbody>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>1</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>2</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>5</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>9</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>344</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>48</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                        </tr> -->
<!---->
<!--                                        <tr>-->
<!--                                          -->
<!--                                            <td>-->
<!---->
<!--                                                <table >-->
<!--                                                    <tbody>-->
<!--                                                        <tr >-->
<!--                                                            <td>T-shirt</td>-->
<!--                                                        </tr>-->
<!--                                                        <tr>-->
<!--                                                            <td>Saree</td>-->
<!--                                                        </tr>-->
<!--                                                    </tbody>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!---->
<!--                                            <td>-->
<!---->
<!--                                                <table >-->
<!--                                                    <tbody>-->
<!--                                                        <tr >-->
<!--                                                            <td>S</td>-->
<!--                                                        </tr>-->
<!--                                                        <tr>-->
<!--                                                            <td>M</td>-->
<!--                                                        </tr>-->
<!--                                                    </tbody>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>1</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>2</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>5</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>9</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>344</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>48</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>10</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>48</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                            <td>-->
<!---->
<!--                                                <table>-->
<!--                                                    <tr>-->
<!--                                                        <td>8</td>-->
<!--                                                    </tr>-->
<!--                                                    <tr>-->
<!--                                                        <td>11</td>-->
<!--                                                    </tr>-->
<!--                                                </table>-->
<!---->
<!--                                            </td>-->
<!--                                        </tr>-->
<!---->
<!--                                    </tbody>-->
                                       
                                     
                                </table>
                                <!--                                      
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
                          <?php include ('js.php') ?>
                                <script>
                                    function deletedc(x1) {

                                        if (confirm("Are you sure you want to delete this?")) {
                                            btn2 = $(x1).data('panel-id');

                                            $.ajax({
                                                url: "delectbarcode.php",
                                                method: "POST",
                                                data: {
                                                    id: btn2
                                                },
                                                dataType: "text",
                                                success: function(data) {
                                                    alert(data);
                                                    window.location = "home.php"
                                                }
                                            });


                                        }
                                    }
                                </script>

<!--                                <script>-->
<!--                                    $(function() {-->
<!---->
<!--                                        var pgurl = window.location.href.-->
<!--                                        substr(window.location.href.lastIndexOf("/") + 1);-->
<!---->
<!--                                        $(".sidebar-menu li").each(function() {-->
<!---->
<!--                                            if (pgurl == '') {-->
<!--                                                $(".sidebar-menu li:eq(1)").addClass("active");-->
<!--                                            } else-->
<!--                                            if ($('a', this).attr("href") == pgurl || $('a', this).attr("href") == '')-->
<!--                                                $(this).addClass("active");-->
<!--                                        })-->
<!--                                    });-->
<!--                                </script>-->
</body>

</html>