<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];

print_r($_POST);
$result = $db->query("SELECT * FROM products WHERE product_id= $b");
//$result->bindParam(':userid', $b);
//$result->execute();
for($i=0; $row = $result->fetch_assoc(); $i++){
$asasa=$row['price'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$p=$row['profit'];
}

//edit qty
$sql = "UPDATE products 
        SET qty=qty-$c
		WHERE product_id=$b";
$q = $db->query($sql);
//$q->execute(array($c,$b));
$fffffff=$asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;
// query
$aq=pq($a);
$b=pq($b);
$c=pq($c);
$d=pq($d);
$e=pq($name);
$f=pq($asasa);
//$g=pq($g);
$h=pq($profit);
$i=pq($code);
$j=pq($gen);
$k=pq($date);
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,profit,product_code,gen_name,date) VALUES ($aq,$b,$c,$d,$e,$f,$h,$i,$j,$k)";
$q = $db->query($sql);
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':h'=>$profit,':i'=>$code,':j'=>$gen,':k'=>$date));

if($q){
    header("location: sales.php?id=$w&invoice=$a");
    }else{
    print $sql;
    }

?>