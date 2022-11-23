<?php
// configuration
include('../connect.php');

// new data
$id = pq($_POST['memi']);
$a = pq($_POST['name']);
$b = pq($_POST['address']);
$c = pq($_POST['contact']);
$d = pq($_POST['cperson']);
$e = pq($_POST['note']);
// query
$sql = "UPDATE supliers 
        SET suplier_name=$a, suplier_address=$b, suplier_contact=$c, contact_person=$d, note=$e
		WHERE suplier_id=$id";
$q = $db->query($sql);
//$q->execute(array($a,$b,$c,$d,$e,$id));

if($q){
    header("location: supplier.php");
    }else{
    print $sql;
    }
?>