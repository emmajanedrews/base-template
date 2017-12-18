<?php
// Authentication Variables
$account_id = "1808590";
$public_api_key = "13ce4d0e43aa22f28c9c";
$private_api_key = "fc36793623f9bee1ae46";

// Form variable(s)
$email = 'drews.emma@gmail.com';

// Set URL
$url = "https://api.e2ma.net/" . $account_id . "/members/email/" . $email;

// Open connection
$ch = curl_init();

// Make the curl call
curl_setopt($ch, CURLOPT_USERPWD, $public_api_key . ":" . $private_api_key);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$head = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// check for errors
if($http_code > 200) {
    print "Error getting member:\r\n";
    print_r($head);
} else {
    print "Member information:\r\n";
    print_r($head);
}
?>
