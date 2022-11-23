<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$aq = pq($a);
$b = pq($_POST['cashier']);
$c = pq($_POST['date']);
$d = $_POST['ptype'];
$dq=pq($d);
$e = pq($_POST['amount']);
$z = pq($_POST['profit']);
$cname = pq($_POST['cname']);
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ($aq,$b,$c,$dq,$e,$z,$f,$cname)";
$q = $db->query($sql);
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname));
if($q){
    header("location: preview.php?invoice=$a");
}else{
    print $sql;
}
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name) VALUES ($aq,$b,$c,$dq,$e,$z,$f,$cname)";
$q = $db->query($sql);
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname));
if($q){
    header("location: preview.php?invoice=$a");
}else{
    print $sql;
}
exit();
}
// query



?>