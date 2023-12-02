<?php
helper('PromptPay-QR-generator/lib/PromptPayQR');
//$id=$hGET['id'];
//$amount=$hGET['amount'];
$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8
$PromptPayQR->id = $id; // PromptPay ID
$PromptPayQR->amount = $amount; // Set amount (not necessary)
echo '<img width="'.(empty($qr_width)?'100%':$qr_width).'" src="' . $PromptPayQR->generate() . '" />';