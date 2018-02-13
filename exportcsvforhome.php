<?php
include ('connection.php');
$filename = "product";




$fp = fopen("csv/$filename.csv", "w");

$res = mysqli_query($con ,"SELECT category, style, sku, productName, brand, status FROM productinfo");

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

}

fclose($fp);

//header("Content-type:application/csv");
//
//// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename='product.csv'");
//
//// The PDF source is in original.pdf
//readfile("product.csv");
//

header('Location: home.php');
//?>
<?php
//$filename = "test";
//$fp = fopen("csv/$filename.csv", "w");
//
//$res = mysqli_query($con,"SELECT * FROM `productinfo`");
//
//// fetch a row and write the column names out to the file
//$row = mysqli_fetch_assoc($res);
//$line = "";
//$comma = "";
//foreach($row as $name => $value) {
//$line .= $comma . '"' . str_replace('"', '""', $name) . '"';
//$comma = ",";
//}
//$line .= "\n";
//fputs($fp, $line);
//
//// remove the result pointer back to the start
//mysqli_data_seek($res, 0);
//
//// and loop through the actual data
//while($row = mysqli_fetch_assoc($res)) {
//
//$line = "";
//$comma = "";
//foreach($row as $value) {
//$line .= $comma . '"' . str_replace('"', '""', $value) . '"';
//$comma = ",";
//}
//$line .= "\n";
//fputs($fp, $line);
//
//
//
//fclose($fp);}
//$location="csv/$filename.csv";
?>