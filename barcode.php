<?php session_start();?>
<html>
<head>

    <style>
        @font-face {
            font-family: "Helvetica";
           // src: url(helvetica-bold.ttf) ;
        }

        @media print {
            /* .page-break { height:0; page-break-before:always; margin:0; border-top:none; }*/
        }

        @page {
            size: landscape;
            /*margin: 1in 0in 0in 0in; */
            margin: 1in 0in 0in 0in;


        }

        #barcodeprint{
            width:100mm;
            height:50mm;
            margin: 2px;
            float: left;

            line-height: 14px;
            border-bottom: 1px dashed #eee;
            border-right: 1px dashed #eee;
            padding: 4px;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
            font-weight: bold;

        }

        #barcodeprint h4{
            text-align:center;
        }
        #barcodeprint img{

        }

        div#pagbrek {
            page-break-after: always;
        }

        body{
            width: landscape;
            font-family: "Arial";
            /*font-family: "Open Sans",sans-serif;*/
            /*margin-top: 100px;*/
        }

        #nwpagestyle{
            margin-top: 100px;
        }
        #extra_side{
            background-color: #000;
            color: #fff;
            float: left;
            font-weight: bold;
            height: 8%;
            margin-left: -77px;
            margin-top: 89px;
            overflow: hidden;
            padding-left: 23px;
            padding-right: 3px;
            padding-top: 3px;
            -ms-transform: rotate(-90deg); /* IE 9 */
            -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
            transform: rotate(-90deg);
            width: 39%;
        }

        #main-content{
            float: left;
            margin-left: -64px;
            margin-top: -39px;
            width: 90%;
        }

        #extra_right{
            background-color: #000;
            color: #fff;
            float: right;
            font-size: 31px;
            height: 25px;
            padding: 9px;
            width: 25%;
        }

        pre {
            font-family: "Helvetica";
            line-height: 0;
            padding: 2px 0;
            /*white-space: pre-wrap;
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;   */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
        }

        #last_line{
            /*display: -moz-box;
            display: inline;*/
            height: 17px;
            margin: -1px 0 13px;
            overflow: hidden;
        }

    </style>
</head>
<body >
<?php
include ('connection.php');
extract($_GET);
extract($_POST);
$limit=($rto-$rfrom)+1;

$sql="select * from barcode WHERE `id` = $id";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($result)) {
$count=1;
//$startvalue=$row['lastvalue'];
//$limit=$startvalue+$limit;
$sl=$rfrom;
    for ($i=0;$i<$limit;$i++) {
        ?>


        <div id="barcodeprint" ">
            <div id="extra_side">THIS SIDE UP -&gt;</div>
            <div id="extra_right"><?php echo $row['line5']?></div>
            <div id="main-content">
                <div style="text-align: left; width: 75%"><strong><?php echo $row['header']?></strong></div>
                <div style=" font-size:9px; float:left; width:100%;margin:0 0 -10px;">
                    <pre><?php echo $row['line1']?></pre>
                </div>

                <div style=" font-size:9px; float:left; width:100%; height:16px;">
                    <pre><?php echo $row['line2'].""?>  Selo : <?php echo $sl."/".$row['pcs'] ; ?></pre>
                </div>

                <div id="last_line" style=" font-size:9; float:left; width:100%; height:20px;">
                    <pre><?php echo $row['line3']?></pre>
                </div>
                <div style=" font-size:9px; float:left; height:16px;"><pre><?php echo $row['line4']?></pre></div>

                <!--        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABkAQMAAAAGz5+DAAAABlBMVEX///8AAABVwtN+AAAASUlEQVRIie3KsQmAUAxF0YADZBXBNvBXD7w2kFWENBYWH+fwnvqY2bharlhZiiPL57wm31tqXx1ej31oNBqNRqPRaDQajUb7Z9t6VYaW14QwHQAAAABJRU5ErkJggg=="><br>-->

                <?php


                if($sl<10)
                {
                    $sl="000".$sl;
                }elseif($sl<100)
                {
                    $sl="00".$sl;
                }elseif($sl<1000)
                {
                    $sl="0".$sl;
                }

                $bc=$row['po'].$row['item'].$sl;
                ?>


                <svg class="barcode"
                     jsbarcode-value="<?php echo $bc?>"

                     jsbarcode-textmargin="0"
                     jsbarcode-textAlign = "left"
                     jsbarcode-fontSize ="11.5"
                     jsbarcode-fontOptions ="bold"
                     style="margin-top: -17px; transform: rotate(90deg);"
                >
                </svg>
<!--                <div style="text-align: left;margin-left: 8px; font-size:10px; width:300px; margin-top: -10px;">--><?php //echo $bc?><!--</div>-->
            </div>

        </div>
       <?php
        if ($count%6==0){
            ?>
            <div id='pagbrek'>&nbsp;</div>
            <?php
        }
        ?>

        <?php
    $count=$count+1;
    $sl=$sl+1;
    }}


 //   $sql1="UPDATE `barcode` SET `lastvalue`='$sl' WHERE `id`=$id";
//$result2=mysqli_query($con,$sql1);
?>

<script src="assets/js/barcode.js"></script>


    <script type="text/javascript">
        JsBarcode(".barcode").init();


    </script>


</body>

</html>