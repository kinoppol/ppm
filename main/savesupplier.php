<?php
session_start();
include('../connect.php');
$a = pq($_POST['name']);
$b = pq($_POST['address']);
$c = pq($_POST['contact'],true);
$d = pq($_POST['cperson']);
$e = pq($_POST['note'],true);
// query
$sql = "INSERT INTO supliers (store_id,suplier_name,suplier_address,suplier_contact,contact_person,note) VALUES (1,$a,$b,$c,$d,$e)";
$q = $db->query($sql);
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
if($q){
header("location: supplier.php");
}else{
    print $sql;
}
?>