<?php
	include_once('../connect.php');
	$id=$_GET['id'];
	$result = $db->query("DELETE FROM customer WHERE customer_id= $id");
	//$result->bindParam(':memid', $id);
	//$result->execute();
?>