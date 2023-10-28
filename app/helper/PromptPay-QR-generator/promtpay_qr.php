<?Php
require_once("lib/PromptPayQR.php");
$id=$_GET['id'];
$amount=$_GET['amount'];
$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8
$PromptPayQR->id = $id; // PromptPay ID
$PromptPayQR->amount = $amount; // Set amount (not necessary)
echo '<img src="' . $PromptPayQR->generate() . '" />';