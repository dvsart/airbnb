<?php
extract($_GET);
$checkin = new DateTime($checkin);
$checkout = new DateTime($checkout);
$nights = $checkout->diff($checkin)->format("%a");
$price = $roomprice;
$symbol = $symbol;
$currency = "EUR";
function tfee($total, $number)
{
  if ( $total > 0 ) {
   return round($number * ($total / 100),0);
  } else {
    return 0;
  }
}

$percent = 4; //  5% ( Five Percent Fee)
$stotal = $roomprice * $nights;
$stotal = trim($stotal);
$fees = tfee($stotal, $percent);
if($deposit) { 
	$total = $stotal+$fees+$deposit;
	$ala = '"extras_price":"'.$symbol.$deposit.'",';
} else { 
	$total = $stotal+$fees; 
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
$smart = smartCount($nights);
if($nights >= 3) { $av = "true"; } else { $av = "false"; }
echo '{
"available":'.$av.',
"nights":"'.$smart.'",
"price_per_night":"'.$symbol.$price.'",
"subtotal":"'.$symbol.$stotal.'",
'.$ala.'
"service_fee":"'.$symbol.$fees.'",
"total_price_with_fees":"'.$symbol.$total.'",
"currency":"'.$currency.'"
}

';
?>