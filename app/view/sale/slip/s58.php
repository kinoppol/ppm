<style>
	td,th{
		font-size:10px;
	}
	hr {
    border-top:1px dotted #000;
    /*Rest of stuff here*/
	}
</style>
<div style="margin: 0 auto; padding: 0px; width: 100%; font-weight: normal; font-size:10px;">
<div style="width: 100%; height: 50px;" >
	<div style="width: 100%; float: left;">
<div style="text-align:center">
<h2>Windmill</h2>
สาขาวิทยาลัยเกษตรและเทคโนโลยีร้อยเอ็ด</br>
เลขที่ 235 หมู่ 4 ต. นิเวศน์<br> 
อ. ธวัชบุรี จ. ร้อยเอ็ด 
</div><br> 
<?php print $inv; ?><br>
<br>
<hr>
<table width="100%">
	<thead>
		<tr>
			<th width="70%">รายการ</th>
			<th width="10%">Qty</th>
			<th width="20%">ราคารวม</th>
		<tr>
	</thead>
	<tbody>
<?php
$sumQty=0;
	foreach($product_list as $pd){
		$sumQty+=$pd['qty'];
		print "<tr><td>".
			  $pd['name'].
			  "</td><td align='center'>".
			  $pd['qty'].
			  "</td><td align='right'>".
			  number_format($pd['amount'],2).
			  "</td><tr>";
	}
?>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>ยอดรวม</td>
	<td align='center'><?php print $sumQty; ?></td>
	<td align='right'><?php print number_format($total??0,2); ?></td>
</tr>
</tbody>
</table>
<hr>
</div>
</div>
</div>
</div>