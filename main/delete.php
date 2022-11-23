<?php
	include('../connect.php');
	$id=$_GET['id'];
	$c=$_GET['invoice'];
	$sdsd=$_GET['dle'];
	$qty=$_GET['qty'];
	$wapak=$_GET['code'];
	//edit qty
	$sql = "UPDATE products 
			SET qty=qty+$qty
			WHERE product_id=$wapak";
	$q = $db->query($sql);
	//$q->execute(array($qty,$wapak));

	$result = $db->query("DELETE FROM sales_order WHERE transaction_id= $id");
	//$result->bindParam(':memid', $id);
	//$result->execute();
	header("location: sales.php?id=$sdsd&invoice=$c");
?>