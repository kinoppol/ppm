<?php
// configuration
include_once('../connect.php');

// new data
$id = pq($_POST['memi']);
$a = pq($_POST['name']);
$b = pq($_POST['address']);
$c = pq($_POST['contact']);
$d = pq($_POST['memno']);
$e = pq($_POST['prod_name']);
$f = pq($_POST['note']);
$g = pq($_POST['date']);
// query
$sql = "UPDATE customer 
        SET customer_name=$a, address=$b, contact=$c, membership_number=$d, prod_name=$e, note=$f, expected_date=$g
		WHERE customer_id=$id";
$q = $db->query($sql);
//$q->execute(array($a,$b,$c,$d,$e,$f,$g,$id));
header("location: customer.php");

?>