<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

function validate($email) {
  // First, we check that there's one @ symbol, and that the lengths are right.
  if (!@ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if (!@ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
			{ return false; }
		}
  // Check if domain is IP. If not,
  // it should be valid domain name
  if (!@ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!@ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|↪([A-Za-z0-9]+))$",$domain_array[$i])) {
        return false; } }
	} return true; }
//--------------------------------------
function myCheckDNSRR($hostName, $recType = '') {
	if(!empty($hostName)) {
		if( $recType == '' ) $recType = "MX";
		exec("nslookup -type=$recType $hostName", $result);
		foreach ($result as $line) {
			if(eregi("^$hostName",$line)) {
				return true;
			}
		}
		return false;
	}
	return false;
}
//--------------------------------------
$email = $_POST["email"];
$username = explode("@", $email);
$username = $username[0];
$domain = explode("@", $email);
$domain = $domain[1];

if (validate($email)) {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		if (myCheckDNSRR($domain,"MX")) { echo "sent"; } else { echo "failed"; }
	} else {
		if (checkdnsrr($domain,"MX")) { echo "sent"; } else { echo "failed"; }
	} } else { echo 'failed'; }
?>
