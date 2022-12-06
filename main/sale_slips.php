<!DOCTYPE html>
<html>
<head>
<?php require_once ('auth.php');?>
<title>
POS
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=70, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 90%;">');          
   docprint.document.write('<style>@import url(../fonts/thsarabunnew.css);h1, h2, h3, h4, h5, h6 {	font-family: \'THSarabunNew\', sans-serif;font-weight: bold;}body{font-family: \'THSarabunNew\', sans-serif;font-size:10px;font-weight: bold;} table, th, td{font-family: \'THSarabunNew\', sans-serif; font-size:8px;font-weight: bold;}</style>');
   //docprint.document.write('<style>h1, h2, h3, h4, h5, h6 {font-family: tahoma;font-size:10px;font-weight: normal;}}body{font-family: tahoma;font-size:10px;font-weight: normal;} table, th, td{font-family: tahoma;font-size:10px;font-weight: normal;}</style>');
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php
$invoice=$_GET['invoice'];
include('../connect.php');
$inv_id=pq($invoice);
$result = $db->query("SELECT * FROM sales WHERE invoice_number= $inv_id");
//$result->bindParam(':userid', $invoice);
//$result->execute();
for($i=0; $row = $result->fetch_assoc(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$date=$row['date'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>



 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>

<body>

<?php include('navfixed.php');?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
             <div class="well sidebar-nav">
                 <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="sales.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>                                     </li>
			<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a>                                    </li>
			<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a>                                    </li>
			<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
			<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Product Inventory</a>                </li>
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>           
          </div><!--/.well -->
        </div><!--/span-->
		
	<div class="span10">
	<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><button class="btn btn-default"><i class="icon-arrow-left"></i> Back to Sales</button></a>

<!--
	<style>
@import url(../fonts/thsarabunnew.css);

h1, h2, h3, h4, h5, h6 {
	font-family: 'THSarabunNew', sans-serif;
}

body{
	font-family: 'THSarabunNew', sans-serif;
}
table, th, td{
	font-family: 'THSarabunNew', sans-serif;
}
	</style> -->
<div class="content" id="content">
	
<div style="margin: 0 auto; padding: 0px; width: 100%; font-weight: normal;">
	<div style="width: 100%; height: 50px;" >
	<div style="width: 100%; float: left;">
	<div style="text-align:center">
		<img src="images/yc.jpg" width="50">
		<h3>ชื่อร้านค้า</h3>
	<h4>ใบเสร็จรับเงิน	<br>
	สำนักงานใหญ่ โทร 08-XXXX-XXXX</h4>
	</div>
	<div>
	<?php
	$cname=pq($cname);
	$resulta = $db->query("SELECT * FROM customer WHERE customer_name= $cname");
	//$resulta->bindParam(':a', $cname);
	//$resulta->execute();
	for($i=0; $rowa = $resulta->fetch_assoc(); $i++){
	$address=$rowa['address'];
	$contact=$rowa['contact'];
	}
	?>
	</div>
	</div>
	<div style="float: left;">
	<table cellpadding="0" cellspacing="0" width="100%" style="text-align:left;width : 100%;">

		<tr>
			<td width="10%">No. </td>
			<td width="40%" style="text-align:left;"><?php echo $invoice ?></td>

			<td width="10%"> </td>
			<td width="40%" style="text-align:right;"><?php echo $date ?></td>
		</tr>
	</table>
	</div>
	<div class="clearfix"></div>
	</div>
	<!--<div style="float: left;width: 95%;">
	------------------------------
	 <hr style="border-style: solid;border-color: black;border-width: 3px 0 0 0;">
	</div> -->
	<div style="width: 95%; margin-top:-170px;margin-left:0px;">
	<table border="0" cellpadding="0" cellspacing="0" style="text-align:left;" width="100%">
		<thead>
			<tr>
				<th style="text-align:center;"> จำนวน<br>(Qty) </th>
				<th style="text-align:center;"> รายการ<br>(Product Name) </th>
				<th style="text-align:right;"> ราคา<br>(Price) </th>
			</tr>
		</thead>
		<tbody>
			
				<?php
					$id=$_GET['invoice'];
					$inv_id=pq($id);
					$sql="SELECT * FROM sales_order WHERE invoice= $inv_id";
					$result = $db->query($sql);
					//print $sql;
					//$result->bindParam(':userid', $id);
					//$result->execute();
					for($i=0; $row = $result->fetch_assoc(); $i++){
				?>
				<tr class="record">
				<td style="text-align:center;"><?php echo $row['qty']; ?></td>
				<td><?php echo $row['gen_name']; ?></td>
				<td style="text-align:right;">
				<?php
				$ppp=$row['price'];
				echo formatMoney($ppp, true);
				?>
				</td>
				</tr>
				<?php
					}
				?>
			
				<tr>
					<td colspan="2" style=" text-align:right;"><strong>ยอดสุทธิ: &nbsp;</strong></td>
					<td colspan="1" style="text-align:right;"><strong>
					<?php
					$sdsd=$_GET['invoice'];
					$inv_id=pq($sdsd);
					$resultas = $db->query("SELECT sum(amount) FROM sales_order WHERE invoice= $inv_id");
					//$resultas->bindParam(':a', $sdsd);
					//$resultas->execute();
					for($i=0; $rowas = $resultas->fetch_assoc(); $i++){
					$fgfg=$rowas['sum(amount)'];
					echo formatMoney($fgfg, true);
					}
					?>
					</strong></td>
				</tr>
				<?php if($pt=='cash'){
				?>
				<tr>
					<td colspan="2"style=" text-align:right;"><strong style="color: #000000;">รับเงินสด :&nbsp;</strong></td>
					<td colspan="1" style="text-align:right;"><strong style="color: #000000;">
					<?php
					echo formatMoney($cash, true);
					?>
					</strong></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="2" style=" text-align:right;"><strong style="color: #000000;">
					<font>
					<?php
					if($pt=='cash'){
					echo 'ทอน :';
					}
					if($pt=='credit'){
					echo 'วันที่ทำรายการ :';
					}
					?>&nbsp;
					</strong></td>
					<td colspan="1" style="text-align:right;"><strong style="color: #000000;">
					<?php
					function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}
					if($pt=='credit'){
					echo $cash;
					}
					if($pt=='cash'){
					echo formatMoney($amount, true);
					}
					?>
					</strong></td>
				</tr>
			
		</tbody>
	</table>
	
	</div>
	</div>
	</div>
	</div>
<div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
</div>
</div>


