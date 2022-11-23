<?php
session_start();
include_once('../connect.php');
$a = pq($_POST['name']);
$b = pq($_POST['address']);
$c = pq($_POST['contact']);
$d = pq($_POST['memno']);
$e = pq($_POST['prod_name']);
$f = pq($_POST['note']);
$g = pq($_POST['date']);
// query
$sql = "INSERT INTO customer (customer_name,address,contact,membership_number,prod_name,note,expected_date) VALUES ($a,$b,$c,$d,$e,$f,$g)";
$q = $db->query($sql);
//print $sql;
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g));
header("location: customer.php");


?>