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
<table>
	<thead>
		<tr>
			<th width="10%">Qty</th>
			<th width="50%">รายการ</th>
			<th width="20%">&nbsp;</th>
			<th width="20%">ราคา</th>
		<tr>
	</thead>
	<tbody>
<?php
	foreach($product_list as $pd){
		print "<tr><td>".
			  $pd['qty'].
			  "</td><td>".
			  $pd['name'].
			  "</td><td>".
			  ($pd['qty']==1?"":"@".number_format($pd['price'],2)).
			  "</td><td align='right'>".
			  number_format($pd['amount'],2).
			  "</td><tr>";
	}
?>
<tr>
	<td>&nbsp;</td>
	<td>รวม</td>
	<td>&nbsp;</td>
	<td align='right'><?php print number_format($total,2); ?></td>
</tr>
</tbody>
</table>
<hr>
<br>
ประเภทการชำระ QR
<br>
</div>
</div>
</div>
</div>