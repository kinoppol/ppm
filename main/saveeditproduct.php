<?php
// configuration
include('../connect.php');

// new data
$id = pq($_POST['memi']);
$a = pq($_POST['code']);
$z = pq($_POST['gen']);
$b = pq($_POST['name']);
$c = pq($_POST['exdate']);
$d = pq($_POST['price']);
$e = pq($_POST['supplier']);
$f = pq($_POST['qty']);
$g = pq($_POST['o_price']);
$h = pq($_POST['profit']);
$i = pq($_POST['date_arrival']);
$j = pq($_POST['sold']);
// query
$sql = "UPDATE products 
        SET product_code=$a, gen_name=$z, product_name=$b, expiry_date=$c, price=$d, supplier=$e, qty=$f, o_price=$g, profit=$h, date_arrival=$i, qty_sold=$j
		WHERE product_id=$id";
$q = $db->query($sql);
//$q->execute(array($a,$z,$b,$c,$d,$e,$f,$g,$h,$i,$j,$id));

if($q){
    header("location: products.php");
}else{    print $sql;
    }
?>