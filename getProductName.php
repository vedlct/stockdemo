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
    include ('connection.php');
    extract($_GET);
    $sl = 1;
    $sql1= mysqli_query($con,"SELECT * FROM `productinfo` WHERE  `productName`='$q'");
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
