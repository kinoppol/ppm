<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<span>Barcode : </span><input type="text" style="width:265px; height:30px;" name="code" id="code"><br>
<span>ชื่อสินค้า : </span><input type="text" style="width:265px; height:30px;" name="gen" Required/><br>
<span>รายละเอียด : </span><textarea style="width:265px; height:50px;" name="name"> </textarea><br>
<span>วันที่ซื้อมา: </span><input type="date" style="width:265px; height:30px;" name="date_arrival" value="<?php print date("Y-m-d"); ?>"/><br>
<span>วันหมดอายุ : </span><input type="date" value="<?php print date("Y-m-d",strtotime("+365 days")); ?>"" style="width:265px; height:30px;" name="exdate" /><br>
<span>ราคาขาย : </span><input type="number" id="txt1" style="width:265px; height:30px;" name="price" onkeyup="sum();" Required><br>
<span>ราคาต้นทุน : </span><input type="number" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br>
<span>กำไรต่อชิ้น : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="profit" readonly><br>
<span>Supplier : </span>
<select name="supplier"  style="width:265px; height:30px; margin-left:-5px;" >
<option></option>
	<?php
	include_once('../connect.php');
	$result = $db->query("SELECT * FROM supliers");
		//$result->bindParam(':userid', $res);
		//$result->execute();
		for($i=0; $row = $result->fetch_assoc(); $i++){
	?>
		<option><?php echo $row['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>จำนวน : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_sold" Required ><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> บันทึก</button>
</div>
</div>
</form>
<script>

	$(function(){
		$("#code").focus();
	});
</script>