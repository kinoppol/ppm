<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->query("DELETE FROM supliers WHERE suplier_id= $id");
	//$result->bindParam(':memid', $id);
	//$result->execute();
?>