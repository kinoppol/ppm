<?php
session_start();
include_once('../connect.php');
$a = pq($_POST['code']);
$b = pq($_POST['name']);
$c = pq($_POST['exdate']);
$d = pq($_POST['price']);
$e = pq($_POST['supplier']);
$f = pq($_POST['qty']);
$g = pq($_POST['o_price']);
$h = pq($_POST['profit']);
$i = pq($_POST['gen']);
$j = pq($_POST['date_arrival']);
$k = pq($_POST['qty_sold']);
// query
$sql = "INSERT INTO products (product_code,product_name,expiry_date,price,supplier,qty,o_price,profit,gen_name,date_arrival,qty_sold) VALUES ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)";
$q = $db->query($sql);
//print $sql;
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k));
if($q){
header("location: products.php");
}else{
print $sql;
}

?>