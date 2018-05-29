<?php
extract($_GET);
//print_r($_GET);
if (strpos($currency, "EUR") !== false) { 
  $symbol = "€";
} else if (strpos($currency, "GBP") !== false) {
  $symbol = "£";
} else if (strpos($currency, "USD") !== false) {
  $symbol = "$";
} else if (strpos($currency, "AUD") !== false) {
  $symbol = "$";
} else if (strpos($currency, "CAD") !== false) {
  $symbol = "$";
} else if (strpos($currency, "YEN") !== false) {
  $symbol = "¥";
} else {
  $symbol = "<sup>" . $currency . "</sup>";
}

$stotal = $roomprice * $months;
$firstpay = $roomprice * $payment + $deposit;
if($deposit) {
	$ala = '"extras_price":"'.$symbol.$deposit.'",';
} else {
	$ala = '';
}
function smartCount($length = 1) {
    $characters = 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    } return $randomString;
} //-----------------
$smart = smartCount($months);
	if($months >= 1) { $av = "true"; } else { $av = "false"; }
echo '{
"available":'.$av.',
"nights":"'.$smart.'",
"months":"'.$smart.'",
"price_per_night":"'.$symbol.$roomprice.'",
"subtotal":"'.$symbol.$stotal.'",
'.$ala.'
"service_fee":"'.$symbol.$firstpay.'",
"total_price_with_fees":"'.$symbol.$firstpay.'",
"currency":"'.$currency.'"
}

';
?>
