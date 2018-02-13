<?php
include ('connection.php');
$filename = "hwllo";

$fp = fopen("csv/$filename.csv", "w");

$res = mysqli_query($con ,"SELECT * FROM productinfo");

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
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=hwllo.csv");
    fputs($fp, $line);

}

fclose($fp);




?>
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
<?php
//include ('connection.php');
//$filename = "toy_csv.csv";
//$fp = fopen("csv/$filename.csv", "w");
//
//$query = "SELECT category, style, sku, productName, brand, status FROM productinfo";
//$result = mysqli_query($con,$query);
//while ($row = mysqli_fetch_row($result)) {
//$header[] = $row[0];
//}
//header('Content-type: application/csv');
//header('Content-Disposition: attachment; filename='.$filename);
//fputcsv($fp, $header);
//
//$num_column = count($header);
//$query = "SELECT * FROM productinfo";
//$result = mysqli_query($con ,$query);
//while($row = mysqli_fetch_row($result)) {
//fputcsv($fp, $row);
//}
//exit;
//?>